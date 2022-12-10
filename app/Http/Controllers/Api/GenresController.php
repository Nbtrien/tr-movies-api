<?php

namespace App\Http\Controllers\Api;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Movie, Image, Trailer, Country, Categories, Genre, GenreinMovie, Actor, ActorinMovie, 
    Director, Episode, MovieinTag, Tag, MovieinSeries, Series};
use App\Http\Resources\GenresResource;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // get request 
        $request->keyword = $request->keyword ?: 'updated_at';
        $request->orderby = $request->orderby ?: 'desc';
        if ($request->limit == 0) {
            $genres = Genre::orderBy($request->keyword, $request->orderby)->get();
            foreach ($genres as $genre) {
                $genre->image;
            }
            // return response()->json([
            //     "data" => $genres
            // ]);
            return GenresResource::collection($genres);
        } else {
            $limit = $request->limit ?: 12;

            $genres = Genre::orderBy($request->keyword, $request->orderby)
            ->paginate($limit);
             foreach ($genres as $genre) {
                $genre->image;
            }
            // return response()->json(
            //     $genres
            // );
            return GenresResource::collection($genres);
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

    public function storeFiletoDrive($file){
        $name = time().'.' . explode('/', explode(':', substr($file, 0, strpos($file, ';')))[1])[1];

        $disk = Storage::disk('google')->put($name, file_get_contents($file));

        $gcs = Storage::disk('google');
        $url = $gcs->url($name);


        return $url;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genre = new Genre;

        $imagestore = $request->get('image')['file'];
        $image_url = $this->storeFiletoDrive($imagestore);

        $image = new Image;
        $image->image_url = $image_url;
        $image->save();
        $image_id = $image->id;

        $genre->name = $request->name;
        $genre->image_id = $image_id;

        $result = $genre->save();

        return response()->json([
            'status' => $result
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $genres = Genre::find($id);
        if ($request->get('image')) {
            $imagestore = $request->get('image')['file'];
            $image_url = $this->storeFiletoDrive($imagestore);

            $image = Image::find($genres->image_id);
            $image->image_url = $image_url;
            $image->save();
        }

        $genres->name = $request->name;
        $result = $genres->save();

        return response()->json([
            'status' => $result
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $genres_id = $request->id;

        foreach ($genres_id as $id) {
            $genres = Genre::find($id);
            $genres->delete();
        }
        return response()->json([
            'status' => true
        ]);
    }
}
