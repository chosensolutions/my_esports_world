<?php

namespace App\Acme\Modules\Profile;

use App\Acme\Models\Profile;
use App\Acme\Models\Account;
use Auth;

/**
 * Class ProfileRepository
 * @package App\Acme\Modules\Profile
 */
class ProfileRepository implements ProfileRepositoryInterface
{
    /**
     * @var Profile
     */
    private $profileModel;

    /**
     * @var Account
     */
    private $accountModel;

    /**
     * ProfileRepository constructor.
     * @param $profileModel
     * @param $accountModel
     */
    public function __construct(Profile $profileModel, Account $accountModel)
    {
        $this->profileModel = $profileModel;
        $this->accountModel = $accountModel;
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
     * @return int
     */
    public function getAuthProfile()
    {
        $user = Auth::user();
        return [
            'user' => $user,
            'profile' => $user->profile,
            'account' => $user->account
        ];
    }

    /**
     * @param $data
     */
    public function updateProfile($data)
    {
        return;
    }
}