<?php 

namespace App\Repositories\Eloquent;

use Notification;
use App\Notifications\Booking\BookingCreatedMail;
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
		$user = authUser();
		Notification::send($booking->property->user, new BookingCreatedMail($user));
		return $booking;
	}
}