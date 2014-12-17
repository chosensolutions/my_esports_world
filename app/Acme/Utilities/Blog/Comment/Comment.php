<?php

class Comment extends \Eloquent {

	protected $fillable = [
		'name',
		'email',
		'body'
	];

	public function blog()
	{
		return $this->belongsTo('Blog');
	}
}