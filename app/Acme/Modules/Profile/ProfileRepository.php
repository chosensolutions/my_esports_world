<?php

namespace App\Acme\Modules\Profile;

use App\Acme\Models\Profile;

class ProfileRepository implements ProfileRepositoryInterface
{
    /**
     * ProfileRepository constructor.
     *
     * @param Profile $profileModel
     */
    public function __construct(Profile $profileModel)
    {
        $this->profileModel = $profileModel;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->profileModel
                    ->with([
                        'experiences',
                        'awards',
                        'educations',
                        'languages'
                    ])
                    ->get();
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function getById($id)
    {
        return $this->profileModel
                    ->with([
                        'experiences',
                        'awards',
                        'educations',
                        'languages'
                    ])
                    ->find($id);
    }

    /**
     * @param $data
     */
    public function updateProfile($data)
    {
        return;
    }
}