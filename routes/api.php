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

Route::get('movie/{movie_id}/episodes', 'Api\EpisodeController@getEpisodesbyMovie'); // get episodes by movie id

Route::get('actor/{id}', 'Api\ActorController@getActorbyId'); // get actor by id
Route::get('movie/{movie_id}/actors', 'Api\ActorController@getActorsbyMovie'); // get actor by id

Route::get('genres', 'Api\GenresController@index'); // get genres

Route::get('series', 'Api\SeriesController@index'); //get series
Route::get('movie/{movie_id}/series', 'Api\SeriesController@getSeriesbymovie'); //get series

// Authenticate
Route::post('login', 'Api\AuthController@login');
Route::post('register', 'Api\AuthController@register');
Route::post('checkemail', 'Api\AuthController@checkEmail');

// test
Route::get('/', 'Api\MovieController@test');