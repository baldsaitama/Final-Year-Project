<?php 

namespace App\Repositories\Eloquent;


use Notification;
use Illuminate\Support\Facades\Hash;
use App\Notifications\Users\UserPasswordChangedMail;

/**
 * 
 */
class UserRepository extends Repository
{

	public function model()
	{
		return 'App\Models\User';
	}

	public function users()
	{
		return $this->model;
	}

	public function store($request)
	{
		$user = $this->getNew();
		if ($request->first_name && $request->last_name) {
			$user->name = $request->first_name . ' ' . $request->last_name;
		} else {
			$user->name = $request->name;
		}
		// $user->name = $request->first_name . ' ' . $request->last_name;
		$user->email = $request->email;
		$user->phone = $request->phone;
		$user->type = $request->type;
		$user->vendor_id = $request->vendor_id;
		$user->nmc_no = $request->nmc_no;

		$user->password = bcrypt($request->password);
		$user->email_verified_at = now();
		$user->phone_verified_at = now();

		$user->save();

		if($request->has('roles')){
			$user->roles()->sync($request->roles);
		}

		return $user;
	}

	public function renew($user, $request)
	{
		if ($request->first_name && $request->last_name) {
			$user->name = $request->first_name . ' ' . $request->last_name;
		} else {
			$user->name = $request->name;
		}
		

		if($request->hasFile('profile_picture')){
			$file = $this->uploadPhoto($request->file('profile_picture'), "uploads/users/{$user->id}/profile");
			$user->profile_picture = $file['photo_path'];
		}

		if ($request->password) {
			$user->password = Hash::make($request->password);
		}

		// dd($request->all());
		$user->type = $request->type? :$user->type;
		$user->nmc_no = $request->nmc_no;

		$user->save();

		if($request->has('roles')){
			$user->roles()->sync($request->roles);
		}

		return $user;
	}
	public function passwordChange($user, $request)
	{
		if ($request->password) {
			$user->password = Hash::make($request->password);
		}
		$user->save();
		Notification::send($user, new UserPasswordChangedMail($user));
		return $user;
	}
	public function archives()
	{
		return $this->users()->onlyTrashed()->paginate(12);
	}

	public function restore($id)
	{
		return $this->findWithTrashed($id)->restore();
	}

	public function getLists($request)
	{
		$users = $this->users()
			->when($request->q, function($query, $q){
				return $query->where('name', 'like', "%{$q}%");
			})
			->when($request->type, function($query, $type){
				return $query->where('type', $type);
			})
			->paginate(20);

		$items['total'] = $users->total();

		$items['items'] = $users->transform(function($item){
		    return [
		        'id' => $item->id,
		        'text' => $item->name
		    ];
		});

		return $items;
	}

	public function getList($request, $id)
	{
		$ids = explode(',', $id);
        $models = $this->findWithTrashed($ids);

        if(count($ids) == 1){
            return [
                'id' => $models->first()->id,
                'text' => $models->first()->name,
                'email' => $models->first()->email,
                'phone' => $models->first()->phone,
            ];
        }

        return $models->transform(function($item){
            return [
                'id' => $item->id,
                'text' => $item->name,
            ];
        });
	}
}