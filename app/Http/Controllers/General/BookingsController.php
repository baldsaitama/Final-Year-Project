<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\BookingRepository;

class BookingsController extends Controller
{

    protected $bookingRepo;

    function __construct(BookingRepository $bookingRepo)
    {
       $this->bookingRepo = $bookingRepo;
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
        //
    }

    public function accept($id)
    {
        $booking = $this->bookingRepo->requiredById($id);
        $booking->update(['status'=>'accepted']);
        return redirect()->back()->withStatus('Booking Accepted');
    }

    public function reject($id)
    {
        $booking = $this->bookingRepo->requiredById($id);
        $booking->update(['status'=>'rejected']);
        return redirect()->back()->withStatus('Booking Rejected');
    }
}
