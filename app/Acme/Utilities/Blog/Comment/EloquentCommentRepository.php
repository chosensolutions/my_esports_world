<?php namespace Acme\Utilities\Blog\Comment;

use Comment;

class EloquentCommentRepository implements  CommentRepositoryInterface {

    /**
     * @var Comment
     */
    private $commentModel;

    /**
     * @param Comment $commentModel
     */
    function __construct(Comment $commentModel)
    {
        $this->commentModel = $commentModel;
    }

    /**
     * @param $auth_id
     * @return mixed
     */
    public function getAll($auth_id)
    {
        return $this->commentModel->all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->commentModel->find($id);
    }

    /**
     * @param $input
     * @return mixed
     */
    public function create($input)
    {
        return $this->commentModel->create($input);
    }

    /**
     * @param $id
     * @param $input
     * @return mixed
     */
    public function update($id, $input)
    {
        return $this->commentModel->update($input);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->commentModel->delete($id);
    }

}