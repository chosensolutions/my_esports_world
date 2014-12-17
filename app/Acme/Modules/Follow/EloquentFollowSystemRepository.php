<?php namespace Acme\Modules\Follow;

use Follow;

class EloquentFollowSystemRepository {

    /**
     * @var Follow
     */
    private $followModel;

    /**
     * @param Follow $followModel
     */
    function __construct(Follow $followModel)
    {
        $this->followModel = $followModel;
    }

    /**
     * GET
     *
     */
    public function getAllFollowers()
    {

    }

    /**
     * GET
     *
     */
    public function getAllFollowings()
    {

    }

    /**
     *
     * POST
     *
     * aka a friend system
     *
     * schema
     * follower_id, following_id
     * 1 follows 2
     * 2 follows 1
     *
     * userA follows userB
     *
     */
    public function followUser($auth_id, $following_user_id)
    {
        return 1;
    }

    /**
     * DELETE
     *
     * unfollow user
     * authenticated user unfollows user
     *
     */
    public function unFollowUser($auth_id, $following_user_id)
    {
        return null;
    }
}