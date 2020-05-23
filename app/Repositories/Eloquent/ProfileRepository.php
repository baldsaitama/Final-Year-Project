<?php 

namespace App\Repositories\Eloquent;

/**
 * 
 */
class ProfileRepository extends Repository
{

	public function model()
	{
		return 'App\Models\Profile';
	}

	public function profiles()
	{
		return $this->model;
	}

	public function store($request)
	{
        $inputs = $request->all();
        $profile = $this->create($inputs);
		return $profile;
	}

	public function renew($request, $profile_id)
	{
		$profile = $this->requiredById($profile_id);
		$inputs = $request->all();
        $profile->update($inputs);
		return $profile;
    }
}