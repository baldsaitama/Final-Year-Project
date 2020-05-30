<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\AmenityRepository;

class AmenitiesController extends Controller
{
    protected $amenityRepo;

    function __construct(AmenityRepository $amenityRepo)
    {
       $this->amenityRepo = $amenityRepo;
    }

    public function getLists(Request $request)
    {
        return $this->amenityRepo->getLists($request);
    }

    public function getList(Request $request, $id)
    {
       return $this->amenityRepo->getList($request, $id);
    }
}
