<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DirectorinMovie;
use App\Models\{Movie, Image, Trailer, Country, Categories, Genre, GenreinMovie, Actor, ActorinMovie, 
    Director, Episode, MovieinTag, Tag, MovieinSeries, Series};
use App\Http\Resources\MovieResource as MovieResource;
use Illuminate\Support\Collection;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MovieResource::collection(Movie::paginate(5));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // get movies by request
    public function getList(Request $request)
    {
        // get request 
        $request->keyword = $request->keyword ?: 'updated_at';
        $request->orderby = $request->orderby ?: 'desc';
        $limit = $request->limit ?: 12;

        // get by category
        $request->category ? $category = Categories::select('id')->where('name', '=', $request->category)->first() :  $category = null;
        // get by country
        $request->country ? $country = Country::select('id')->where('name', '=', $request->country)->first() :  $country = null;
        
        // get by genre
        $genre = $request->genre ?: null;
        if ($genre) {
            $genre_id = Genre::select('id')->where('name', '=', $genre)->first();
            $genre_id ? $genreinmovies = GenreinMovie::select('movie_id')->where('genre_id', $genre_id->id)->get() : $genreinmovies = null;
            $genre_id ? $movies_id = $genreinmovies->map(function ($genreinmovie) {
                    return $genreinmovie->movie_id;
                })->reject(function ($name) {
                    return empty($name);
                }) : $movies_id = [];
        }

        if (!isset($movies_id))  $movies_id = null;

        // get movies
        $movies = Movie::where(function ($query) use($category, $country, $movies_id){
            if ($category) 
                $query->where('category_id', $category->id);
            if ($country) 
                $query->where('country_id', $country->id);
            if ($movies_id !== null) 
                $query->whereIn('id', $movies_id);
        })
        ->orderBy($request->keyword, $request->orderby)
        ->paginate($limit);

        return MovieResource::collection($movies);
    }

    // get movies by actor
    public function getMoviesbyActor(Request $request) {
        // get request
        $request->keyword = $request->keyword ?: 'updated_at';
        $request->orderby = $request->orderby ?: 'desc';
        $limit = $request->limit ?: 12;
        $actor_id = $request->id;

        // get movies id by actor id
        $actor_id ? $actorinmovies = ActorinMovie::select('movie_id')->where('actor_id', $actor_id)->get() : $actorinmovies = null;
        $actor_id ? $movies_id = $actorinmovies->map(function ($actorinmovie) {
                return $actorinmovie->movie_id;
            })->reject(function ($name) {
                return empty($name);
            }) : $movies_id = [];
        
        // get movies by movies id
        $movies = Movie::where(function ($query) use($movies_id){
        if ($movies_id !== null) 
            $query->whereIn('id', $movies_id);
        })
        ->orderBy($request->keyword, $request->orderby)
        ->paginate($limit);
        
        return MovieResource::collection($movies);
    }

    // get movies by name or key(search)
    public function getMoviesbyName(Request $request){
        // get request
        $key = $request->key;
        $limit = $request->limit ?: 12;
        // get movies by key
        $movies = Movie::where('name', 'like', '%' . $key . '%')->orWhere('eng_name', 'like', '%' . $key . '%')->paginate($limit);
        return MovieResource::collection($movies);
    }

    // get similar movies
    public function similarMovies(Request $request)
    {
        // get request
        $id = $request->id;
        $limit = 12;

        // get movie in tag by movie id
        $movie_tags = MovieinTag::where('movie_id', '=', $id)->get();
        $tags = array();

        if ($movie_tags) 
        {
            // get tags from movies in tag
            foreach ($movie_tags as $movie_tag) 
            {
                $tags[] = $movie_tag->tag_id;
            }

            // get movies by tags
            $movies = Movie::whereHas('movieintags', function ($q) use ($tags) {
                return $q->whereIn('tag_id', $tags); 
            })
            ->where('id', '!=', $id)
            ->take($limit)
            ->get(['id','name','eng_name','profileimage_id','coverimage_id']);
            
            foreach ($movies as $movie) {
                $movie->profileimage->only(['id', 'image_url']);
                $movie->coverimage->only(['id', 'image_url']);
                $movie->name = mb_convert_case ($movie->name,MB_CASE_TITLE);
            }
        }

        // $movie = Movie::find($id);
        // $seriesList = array();
        
        return MovieResource::collection($movies);

    }

    // get movie in series
    public function sameSeries(Request $request)
    {
        // get request
        $id = $request->id;
        $limit = 12;
        
        // find movie by id
        $movie = Movie::find($id);
        $seriesList = [];

        // check is moveie in series
        if(count($movie->movieinseries) != 0){
            $i = 0;
            // Loop through series movies
            foreach ($movie->movieinseries as $movieinserie) {
                // get series from movies in series
                $series_id = $movieinserie->series_id;
                $series = Series::find($series_id);

                // get movies id from movies in series
                $listmovie_id = array();
                foreach ($series->movieinseries as $movieinserie1) {
                    $listmovie_id[] = $movieinserie1->movie_id;
                }

                // get movies from movies id
                $relatedmovies = Movie::whereIn('id', $listmovie_id)
                ->where('id', '!=', $id)
                ->take($limit)
                ->get(['id','name','eng_name','profileimage_id','coverimage_id']);
                foreach ($relatedmovies as $relatedmovie) {
                    $relatedmovie->profileimage->only(['id', 'image_url']);
                    $relatedmovie->coverimage->only(['id', 'image_url']);
                    $relatedmovie->name = mb_convert_case ($relatedmovie->name,MB_CASE_TITLE);
                }
                $seriesList[$i]['title'] = 'Series '. mb_convert_case ($series->name,MB_CASE_TITLE);
                $seriesList[$i]['movies'] = MovieResource::collection($relatedmovies);
                $i++;
            }
            return response()->json([
                'data' => $seriesList ?: null
            ]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // get movie by id
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        $genreinmovies = GenreinMovie::select('genre_id')->where('movie_id', $id)->get();

        $genres_id = $genreinmovies->map(function ($genreinmovie) {
            return $genreinmovie->genre_id;
        })->reject(function ($name) {
            return empty($name);
        });

        $genres = Genre::select('id', 'name')
        ->whereIn('id', $genres_id)
        ->get();

        $actorinmovies = ActorinMovie::select('actor_id')->where('movie_id', $id)->get();

        $casts_id = $actorinmovies->map(function ($actorinmovie) {
            return $actorinmovie->actor_id;
        })->reject(function ($name) {
            return empty($name);
        });

        $casts = Actor::select('id', 'name')
        ->whereIn('id', $casts_id)
        ->get();

        $directorinmovies = DirectorinMovie::select('director_id')->where('movie_id', $id)->get();

        $directors_id = $directorinmovies->map(function ($directorinmovie) {
            return $directorinmovie->director_id;
        })->reject(function ($name) {
            return empty($name);
        });

        $directors = director::select('id', 'name')
        ->whereIn('id', $directors_id)
        ->get();

        if($movie->category->name == 'phim bộ') 
        {
            $newepisode = '0';
            if (Episode::where('seriesmovie_id', '=', $movie->seriesmovies->id)->first()) 
            {
                $newepisode = Episode::select('episode')
                ->where('seriesmovie_id', '=', $movie->seriesmovies->id)
                ->orderBy('created_at', 'desc')
                ->first();
            }
        }

        return response()->json([
            'id' => $movie->id, 
            'name' => $movie->name,
            'eng_name' => $movie->eng_name,
            'description' => $movie->description,
            'language' => $movie->language,
            'studio' => $movie->studio,
            'releasedate' => $movie->releasedate,
            'runtime' => $movie->runtime,
            'avgrating' => $movie->avgrating,
            'view' => $movie->view,
            'category_id' => $movie->category_id,
            'category' => Categories::findOrFail($movie->category_id)->name,
            'country_id' => $movie->country_id,
            'country' => Country::findOrFail($movie->country_id)->name,
            'profileimage' => Image::find($movie->profileimage_id)->image_url,
            'coverimage' => Image::find($movie->coverimage_id)->image_url,
            'genres' => $genres,
            'casts' => $casts,
            'directors' => $directors,
            'newepisode' => isset($newepisode->episode) ? $newepisode->episode : 0,
            'episodes' => isset($movie->seriesmovies->episodes) ? $movie->seriesmovies->episodes : null
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // test api
    public function test()
    {
        //
        return response()->json([
                'data' => "Ok"
        ]);
    }
}
