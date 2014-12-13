<?php

use Laracasts\Commander\CommanderTrait;

class ApiController extends \BaseController {

    use CommanderTrait;

    public function response()
    {
        return 1;
    }

}