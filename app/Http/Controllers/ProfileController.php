<?php

namespace App\Http\Controllers;

use App\Acme\Models\Profile;
use Auth;
use App\Acme\Modules\Profile\ProfileRepositoryInterface;
use Illuminate\Http\Request;

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

    /**
     * @return mixed
     */
    protected function authProfile()
    {
        $profile = $this->profileRepository->getAuthProfile();
        return $this->response(
            $data = $profile,
            'Auth info with user profile.',
            200
        );
    }

    protected function update(Request $request, $id)
    {
        return $this->response(
            $data = $request->all(),
            'update profile successful.',
            200
        );
    }
}
