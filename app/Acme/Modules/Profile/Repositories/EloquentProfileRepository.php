<?php namespace Acme\Modules\Profile\Repositories;

use Profile;

class EloquentProfileRepository implements ProfileRepositoryInterface {

    /**
     * @var Profile
     */
    private $profileModel;

    /**
     * @param Profile $profileModel
     */
    function __construct(Profile $profileModel)
    {
        $this->profileModel = $profileModel;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->profileModel->all();
    }

    /**
     * @return mixed
     */
    public function getByUsername()
    {
        return $this->profileModel->all();
    }

} 