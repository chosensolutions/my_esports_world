<?php

namespace App\Http\Controllers;

use App\Acme\Modules\Profile\ProfileRepositoryInterface;
use App\Http\Requests;

class ProfileController extends Controller
{
    /**
     * @var ProfileRepositoryInterface
     */
    private $profileRepository;

    /**
     * ProfileController constructor.
     * @param $profileRepository
     */
    public function __construct(ProfileRepositoryInterface $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    /**
     * @return mixed
     */
    protected function index()
    {
        return $this->response(
            $this->profileRepository->getAll(),
            'All profiles in the database',
            200
        );
    }

    /**
     * @param $id
     * @return mixed
     */
    protected function show($id)
    {
        return $this->response(
            $this->profileRepository->getById($id),
            'profile of the user by id.',
            200
        );
    }
}
