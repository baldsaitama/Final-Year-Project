<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.properties.index',compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.properties.create');
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
        return redirect()->route('admin.properties.index')->withStatus('Property Created');
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
        $property = $this->propertyRepo->requiredById($id);
        return view('admin.properties.edit',compact('property'));
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
        $property = $this->propertyRepo->renew($request,$id);
        return redirect()->route('admin.properties.index')->withStatus('Property Updated');

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
        $message = [
            'status' => 'Property deleted.'
        ];
        if(request()->ajax() || request()->wantsJson()){
            return response()->json($message);
        }
        return redirect()->back()->withStatus('Property Deleted');
    }

    public function getImagesLists(Request $request, $property_id)
    {
        $property = $this->propertyRepo->requiredById($property_id);

        return $property->images;
    }


    public function uploadImage(Request $request, $property_id)
    {
        $this->validate($request, [
            'files' => 'required'
        ]);

        $property = $this->propertyRepo->uploadImage($request, $property_id);

        if($request->ajax() || $request->wantsJson()){
            return response()->json([
                'status' => 'Image added to property',
                'property' => $property->load('images')->toJson()
            ]);
        }
    }

    public function deleteImage(Request $request, $property_id, $image_id)
    {
        $property = $this->propertyRepo->deleteImage($request, $property_id, $image_id);

        if($request->ajax() || $request->wantsJson()){
            return response()->json([
                'status' => 'Image deleted from property',
                'property' => $property->load('images')->toJson()
            ]);
        }
    }
}
