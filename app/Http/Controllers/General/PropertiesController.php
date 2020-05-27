<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\PropertyRepository;

class PropertiesController extends Controller
{
    protected $propertyRepo;

    function __construct(PropertyRepository $propertyRepo)
    {
        $this->propertyRepo = $propertyRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = $this->propertyRepo->paginate(null,20);
        return view('general.properties.index',compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (authUser()->user_type=='owner') {
            if (authUser()->is_verified==1) {
                return view('general.properties.create');
            }
            else {
                return view('general.profiles.index');
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property = $this->propertyRepo->store($request);
        return redirect()->route('properties.index')->withStatus('Property Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = $this->propertyRepo->requiredById($id);
        return view('general.properties.show',compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = $this->propertyRepo->requiredById($id);
        return view('general.properties.edit',compact('property'));
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
        $property = $this->propertyRepo->renew($request, $id);
        return redirect()->route('properties.index')->withStatus('Property Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = $this->propertyRepo->requiredById($id);
        $property->delete();
        return redirect()->route('properties.index')->withStatus('Property Deleted');
    }

    public function search(Request $request)
    {
        return view('general.properties.buyrent');
    }
}
