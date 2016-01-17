<?php

namespace App\Acme\Modules\Account;

interface AccountRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param $data
     * @return mixed
     */
    public function updateProfile($data);

}