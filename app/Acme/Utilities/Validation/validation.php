<?php namespace Acme\Utilities\Validation;

use Validator;

abstract class Validation {
	
	protected $rules;
	protected $message;

	public function validate($input)
	{
		$validator = Validator::make($input, $this->getRules());

		if ($validator->fails())
		{
			throw new ValidationException($validator);
		}
	}

	public function getRules()
	{
		return $this->rules;
	}

}