<?php

class Blog extends \Eloquent {

	protected $fillable = [
		'title',
		'body',
		'author'
	];

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function comments()
	{
		return $this->hasMany('Comment');
	}

}