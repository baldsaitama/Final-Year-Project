<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\PropertyRepository;

class WelcomeController extends Controller
{
    protected $propertyRepo;

    function __construct(PropertyRepository $propertyRepo)
    {
        $this->propertyRepo = $propertyRepo;
    }

    public function index(Request $request)
    {
        $buyingHouses = $this->propertyRepo->properties()->where('status','sale')->take(4)->get();
        $rentingHouses = $this->propertyRepo->properties()->where('status','rent')->take(4)->get();
        return view('welcome',compact('buyingHouses','rentingHouses'));
    }
}
