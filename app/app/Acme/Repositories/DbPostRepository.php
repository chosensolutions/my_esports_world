<?php namespace Acme\Repositories;

use Acme\Interfaces\PostRepositoryInterface;
use Post;


class DbPostRepository extends DbBaseRepository implements PostRepositoryInterface {

    protected $model;

    function __construct(Post $model)
    {
        $this->model = $model;
    }

}

