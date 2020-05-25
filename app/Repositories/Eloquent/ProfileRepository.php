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
		$inputs = $request->except(['image']);
		if($request->hasFile('image'))
        {
            $file = $request->file('image');
			$data = $this->uploadPhoto($file, "uploads/citizenships", NULL, 100, 90);
            $inputs['citizenship_image'] = $data['photo_path'];
		}

        $profile = $this->create($inputs);
		return $profile;
	}

	public function renew($request, $profile_id)
	{
		$profile = $this->requiredById($profile_id);
		$inputs = $request->except(['image']);
		if($request->hasFile('image'))
        {
			$file = $request->file('image');
			$data = $this->uploadPhoto($file, "uploads/citizenships", $profile->citizenship_image, 499, 499);
			$inputs['citizenship_image'] = $data['photo_path'];
			
		}
        $profile->update($inputs);
		return $profile;
    }
}