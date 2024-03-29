<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('movies', 'Api\MovieController@getList'); //get all movies
// Route::get('movie/{id}', 'Api\MovieController@show'); //get movie by id
// Route::get('movies/similarmovies/{id}', 'Api\MovieController@similarMovies'); // get similar movie by movie id
// Route::get('movies/sameseries/{id}', 'Api\MovieController@sameSeries'); // get series movie by 
// Route::get('movies/search/{key}', 'Api\MovieController@getMoviesbyName'); //get movie by key
// Route::get('movies/actor/{id}', 'Api\MovieController@getMoviesbyActor'); // get movie by actor
Route::get('movies', 'Api\MovieController@getList'); //get all movies
Route::get('movie/{movie_id}', 'Api\MovieController@show'); //get movie by id
Route::get('movie/{movie_id}/similar', 'Api\MovieController@similarMovies'); // get similar movie by movie id
Route::get('movie/{movie_id}/sameseries', 'Api\MovieController@sameSeries'); // get series movie by 
Route::get('search/movie/{key}', 'Api\MovieController@getMoviesbyName'); //get movie by key
Route::get('actor/{actor_id}/movies', 'Api\MovieController@getMoviesbyActor'); // get movie by actor
Route::get('series/{series_id}/movies', 'Api\MovieController@getMoviesbySeries'); // get movies by series

// Incomplete
Route::get('movie/{movie_id}/series', 'Api\SeriesController@index');

Route::get('movie/{movie_id}/trailer', 'Api\TrailerController@getTrailerbyMovieId'); // get trailer by movie id

Route::get('video/{video_id}', 'Api\VideoController@getVideobyId'); // get video by id
Route::get('movie/{movie_id}/video', 'Api\VideoController@getVideobyMovieId'); // get video by movie id
Route::get('movie/{movie_id}/episode/{episode}/video_id', 'Api\VideoController@getVideoIdbyEpisode'); //get get video id by episode
Route::get('movie/{movie_id}/episode/{episode}/video', 'Api\VideoController@getVideobyEpisode'); //get get video by episode

Route::get('movie/{movie_id}/comments', 'Api\CommentController@commentsbyMovieId'); // get comments by movie id
Route::get('comments', 'Api\CommentController@index'); // get comments by movie id

Route::get('movie/{movie_id}/episodes', 'Api\EpisodeController@getEpisodesbyMovie'); // get episodes by movie id

Route::get('actors', 'Api\ActorController@index'); // get actors
Route::get('actor/{id}', 'Api\ActorController@getActorbyId'); // get actor by id
Route::get('movie/{movie_id}/actors', 'Api\ActorController@getActorsbyMovie'); // get actor by movie

Route::get('genres', 'Api\GenresController@index'); // get genres

Route::get('categories', 'Api\CategoryController@index'); // get categories

Route::get('countries', 'Api\CountryController@index'); // get countries

Route::get('tags', 'Api\TagController@index'); // get tags

Route::get('series', 'Api\SeriesController@index'); //get series
Route::get('movie/{movie_id}/series', 'Api\SeriesController@getSeriesbymovie'); //get series

// Authenticate
Route::post('login', 'Api\AuthController@login');
Route::post('register', 'Api\AuthController@register');
Route::post('checkemail', 'Api\AuthController@checkEmail');


Route::group(['middleware' => ['jwt.verify']], function() {
    Route::post('logout', 'Api\AuthController@logout');
    Route::post('refresh', 'Api\AuthController@refresh');
    Route::post('check_token', 'Api\AuthController@checktoken');

    Route::post('comments', 'Api\CommentController@store');
    Route::post('usermovies', 'Api\UserMovieController@store'); //store movie by user
    Route::put('usermovies', 'Api\UserMovieController@destroy'); //delete movie by user

    Route::get('user/{user_id}/movies', 'Api\MovieController@getMoviesbyUser'); // get movies by user
    Route::get('user/{user_id}/movie/{movie_id}', 'Api\UserMovieController@checkMoviebyUser'); // get movies by user


    // admin
    Route::get('users', 'Api\AuthController@index'); //get users
    Route::post('movies', 'Api\MovieController@store'); // store movie
    Route::post('actors', 'Api\ActorController@store'); // store actor
    Route::post('genres', 'Api\GenresController@store'); // store genres
    Route::post('tags', 'Api\TagController@store'); // store tags
    Route::post('episodes', 'Api\EpisodeController@store'); // store episodes
    Route::post('actor-in-movies', 'Api\ActorinMovieController@store'); // store actor-in-movie
    Route::post('series', 'Api\SeriesController@store'); // store series
    Route::post('rating', 'Api\RatingController@store'); // store series

    // put
    Route::put('tag/{tag_id}', 'Api\TagController@update'); // update tags
    Route::put('genres/{genres_id}', 'Api\GenresController@update'); // update genres

    // delete
    Route::delete('genres', 'Api\GenresController@destroy'); // delete genres
    Route::delete('tags', 'Api\TagController@destroy'); // delete tags
    Route::delete('comment/{comment_id}', 'Api\CommentController@destroy'); // delete tags
});



// test
Route::get('/', 'Api\MovieController@test');