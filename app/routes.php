<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::post("purifier", function()
{
	$title = Purifier::clean(Input::get("title"));
	$body = Purifier::clean(Input::get("body"));

	$post = new Post;
	$post->title = htmlspecialchars($title);
	$post->body = htmlspecialchars($body);
	$post->save();
});


Route::get('purifier', function()
{
	$post = Post::find(5);
	echo html_entity_decode($post->title);
	echo html_entity_decode($post->body);
});