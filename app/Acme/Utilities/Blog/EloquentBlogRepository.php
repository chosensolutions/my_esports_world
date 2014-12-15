<?php namespace Acme\Utilities\Blog;

use Blog;

/**
 * And Eloquent implementation of a Blog.
 * Includes a basic functions of CRUD.
 *
 * Class EloquentBlogRepository
 * @package Acme\Utilities\Blog
 */
class EloquentBlogRepository implements BlogRepositoryInterface {

    /**
     * @var Blog
     */
    private $blogModel;

    /**
     * @param Blog $blogModel
     */
    function __construct(Blog $blogModel)
    {
        $this->blogModel = $blogModel;
    }

    /**
     * Returns all blog posts; default being most recent
     * blog post by date posted
     *
     * @param string $field
     * @param string $type
     * @return mixed
     */
    public function getAll($field = 'created_at', $type = 'DESC')
    {
        return $this->blogModel->all()->orderBy($field, $type);
    }

    /**
     * Returns a blog specified by id
     *
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->blogModel->find($id);
    }

    /**
     * Creates a blog post and stores it into the database
     *
     * @param $input
     * @return mixed
     */
    public function create($input)
    {
        return $this->blogModel->create($input);
    }

    /**
     * Updates a specific blog by id with new input fields
     *
     * @param $id
     * @param $input
     * @return mixed
     */
    public function update($id, $input)
    {
        return $this->blogModel->find($id)->update($input);
    }

    /**
     * Deletes a specific blog by id
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->blogModel->delete($id);
    }

    /**
     * Gets the total number of blog posts in the database
     *
     * @return int
     */
    public function getTotalBlogPostsCount()
    {
        return $this->blogModel->all()->count();
    }

    /**
     * Gets the $number_of most recent blog posts ordered by dates
     *
     * @param $number_of
     * @return mixed
     */
    public function getLatestBlogPosts($number_of)
    {
        return $this->blogModel->take($number_of)->orderBy('created_at', 'DESC')->get(['*']);
    }

}