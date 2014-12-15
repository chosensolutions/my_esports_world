<?php namespace Acme\Utilities\Blog;

interface BlogRepositoryInterface {

    public function getAll($field, $type);

    public function getLatestBlogPosts($number_of);

    public function getById($id);

    public function getTotalBlogPostsCount();

    public function create($input);

    public function update($id, $input);

    public function delete($id);

}