<?php

namespace App\Http\Controllers;

use App\Acme\Models\Profile;
use Auth;
use App\Acme\Modules\Profile\ProfileRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    /**
     * http://localhost:8000/api/v1/search-profiles?query=a
     */
    protected function search()
    {
        $query = request('query');

        $users = DB::select("
          SELECT
          users.id, profiles.first_name, profiles.last_name, profiles.description
          FROM users
          INNER JOIN profiles
          ON users.id=profiles.user_id
          INNER JOIN accounts
          ON users.id=accounts.user_id
          WHERE profiles.first_name LIKE '%$query%'
          OR profiles.last_name LIKE '%$query%'
          OR profiles.description LIKE '%$query%'
          ORDER BY profiles.first_name ASC, profiles.last_name ASC
          ");

        return $users;
    }
}