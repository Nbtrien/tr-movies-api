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

Route::get('movies', 'Api\MovieController@getList'); //get all movies
Route::get('movie/{id}', 'Api\MovieController@show'); //get movie by id
Route::get('movies/similarmovies/{id}', 'Api\MovieController@similarMovies'); // get similar movie by movie id
Route::get('movies/sameseries/{id}', 'Api\MovieController@sameSeries'); // get series movie by 
Route::get('movies/search/{key}', 'Api\MovieController@getMoviesbyName'); //get movie by key
Route::get('movies/actor/{id}', 'Api\MovieController@getMoviesbyActor'); // get movie by actor

Route::get('trailer/{id}', 'Api\TrailerController@getTrailerbyMovieId'); // get trailer by movie id

Route::get('video/{id}', 'Api\VideoController@getVideobyId'); // get video by id
Route::get('video/movie/{id}', 'Api\VideoController@getVideobyMovieId'); // get video by movie id
Route::get('video/movie/{id}/{episode}', 'Api\VideoController@getVideoIdbyEpisode'); //get get video id by episode

Route::get('comments/{id}', 'Api\CommentController@commentsbyMovieId'); // get comments by movie id

Route::get('episodes/{id}', 'Api\EpisodeController@getEpisodesbyMovie'); // get episodes by movie id

Route::get('actor/{id}', 'Api\ActorController@getActorbyId'); // get actor by id

// Authenticate
Route::post('login', 'Api\AuthController@login');
Route::post('register', 'Api\AuthController@register');
Route::post('checkemail', 'Api\AuthController@checkEmail');

// test
Route::get('/', 'Api\MovieController@test');