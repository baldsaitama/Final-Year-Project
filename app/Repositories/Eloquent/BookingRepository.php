<?php 

namespace App\Repositories\Eloquent;

use Notification;
use App\Notifications\User\ProfileCreatedMail;
/**
 * 
 */
class BookingRepository extends Repository
{

	public function model()
	{
		return 'App\Models\Booking';
	}

	public function bookings()
	{
		return $this->model;
	}

	public function store($request)
	{
		$inputs = $request->all();
		$booking = $this->create($inputs);
		return $booking;
	}
}