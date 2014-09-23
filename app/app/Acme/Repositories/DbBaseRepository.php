<?php namespace Acme\Repositories;

abstract class DbBaseRepository {

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
	{
		return $this->model->find($id);
	}

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete($id)
    {

    }
}