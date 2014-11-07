<?php

class ProfilesController extends \BaseController {

	/**
	 * Display a listing of profiles
	 *
	 * @return Response
	 */
	public function index()
	{
		$profiles = Profile::all();

		return $profiles;
	}

    /**
     * Display the specified profile.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $profile = Profile::find($id);

        return $profile;
    }

	/**
	 * Store a newly created profile in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Profile::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Profile::create($data);

		return Redirect::route('profiles.index');
	}

	/**
	 * Update the specified profile in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$profile = Profile::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Profile::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$profile->update($data);

		return Redirect::route('profiles.index');
	}

	/**
	 * Remove the specified profile from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Profile::destroy($id);

		return Redirect::route('profiles.index');
	}

}
