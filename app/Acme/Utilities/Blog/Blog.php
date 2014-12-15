<?php

class Blog extends \Eloquent {

	protected $fillable = [
		'title',
		'body',
		'author'
	];

	public function comments()
	{
		return $this->hasMany('Comment');
	}

}