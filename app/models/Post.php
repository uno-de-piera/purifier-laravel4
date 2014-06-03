<?php
class Post extends Eloquent
{

	public $timestamps = false;
	
	protected $guarded = array("*");

	protected $fillable = array("title", "body");

}