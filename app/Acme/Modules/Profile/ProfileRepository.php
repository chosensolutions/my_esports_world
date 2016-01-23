<?php

namespace App\Acme\Modules\Profile;

use App\Acme\Models\Profile;
use App\Acme\Models\Account;
use Auth;
use App\Acme\Models\Summoner;
use App\User;

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
     * @var Summoner
     */
    private $summonerModel;

    /**
     * @var User
     */
    private $userModel;

    /**
     * ProfileRepository constructor.
     * @param Profile $profileModel
     * @param Account $accountModel
     * @param Summoner $summonerModel
     * @param User $userModel
     */
    public function __construct(
        Profile $profileModel,
        Account $accountModel,
        Summoner $summonerModel,
        User $userModel
    )
    {
        $this->profileModel = $profileModel;
        $this->accountModel = $accountModel;
        $this->summonerModel = $summonerModel;
        $this->userModel = $userModel;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->userModel->with(['summoner', 'profile'])->skip(0)->take(10)->get();
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function getById($id)
    {
        $data = [
            'profile' => $this->profileModel
                ->with([
                    'experiences',
                    'awards',
                    'educations',
                    'languages',
                    'user'
                ])
                ->find($id),
            'summoner' => $this->userModel->find($this->profileModel->find($id)->user->id)->summoner
        ];
        return $data;
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