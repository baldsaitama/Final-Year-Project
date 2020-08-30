<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\BookingRepository;
use App\Repositories\Eloquent\NotificationRepository;

class BookingsController extends Controller
{

    protected $bookingRepo;
    protected $notificationRepo;

    function __construct(BookingRepository $bookingRepo, NotificationRepository $notificationRepo)
    {
       $this->bookingRepo = $bookingRepo;
       $this->notificationRepo = $notificationRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = authUser()->bookings()->orderBy('created_at','desc')->paginate(20);
        return view('general.bookings.index',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = $this->bookingRepo->store($request);
        return redirect()->back()->withStatus('Booking Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = $this->bookingRepo->requiredById($id);
        $notifications = $this->notificationRepo->notifications()->get();
        foreach ($notifications as $notification) {
            $notification_data = $notification->data;
            if ($notification_data['id']==$id) {
                $notification->delete();
                break;
            }
        }

        $booking->delete();
        return redirect()->back()->withStatus('Bookin Cancelled');
    }

    public function accept($id)
    {
        $booking = $this->bookingRepo->requiredById($id);
        $booking->update(['status'=>'accepted']);
        $booking->property->update(['is_published'=>0]);
        return redirect()->back()->withStatus('Booking Accepted');
    }

    public function reject($id)
    {
        $booking = $this->bookingRepo->requiredById($id);
        $booking->update(['status'=>'rejected']);
        return redirect()->back()->withStatus('Booking Rejected');
    }
}
