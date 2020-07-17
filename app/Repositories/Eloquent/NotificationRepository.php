<?php 

namespace App\Repositories\Eloquent;


class NotificationRepository extends Repository
{
    public function model()
	{
		return 'App\Models\Notification';
	}

	public function notifications()
	{
		return $this->model;
    }

	public function renew($request, $id)
	{
		$notification = $this->requiredById($id);

		$notification->update(['read_at'=>now()]);

		return $notification;
	}
}