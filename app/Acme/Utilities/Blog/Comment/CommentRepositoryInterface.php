<?php namespace Acme\Utilities\Blog\Comment;

interface CommentRepositoryInterface {

    public function getAll($auth_id);

    public function getById($id);

    public function create($input);

    public function update($id, $input);

    public function delete($id);

}