<?php namespace Acme\Utilities\Validation;

abstract class Validation {
	
	protected $rules;
	protected $input;
	protected $message;

	function __construct(array $input = [])
	{
		$this->input = $input;
	}

	public function validate()
	{
		$validator = Validator::make($this->getInput(), $this->getRules());

		if ($validator->fails())
		{
			throw new ValidationException($validator);
		}
	}

	public function getRules()
	{
		return $this->rules;
	}

	public function getInput()
	{
		return $this->input;
	}

}