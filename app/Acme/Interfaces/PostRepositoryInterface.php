<?php namespace Acme\Interfaces;

interface PostRepositoryInterface {

    public function getAll();

    public function getById($id);

    public function create();

    public function update();

    public function delete($id);

}