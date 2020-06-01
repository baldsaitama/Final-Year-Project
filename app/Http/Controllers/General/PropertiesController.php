<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\PropertyRepository;
use Illuminate\Support\Facades\Validator;

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
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
//            'status' => ['required'],
//            'category' => ['required'],
//            'type' => ['required'],
//            'property_face' => ['required'],
//            'road_width' => ['required', 'integer'],
//            'road_type' => ['required'],
//            'road_unit' => ['required'],
//            'built_year' => ['required'],
//            'furnish' => ['required'],
//            'kitchen' => ['required'],
//            'bedroom' => ['required'],
//            'living_room' => ['required'],
//            'bathroom' => ['required'],
//            'is_published' => ['required'],
//            'title' => ['required'],
//            'description' => ['required'],
//            'price' => ['required'],
//            'price_unit' => ['required'],
        ]);


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
        $relatedProperties = $this->propertyRepo->properties()->where('latitude','>',$property->latitude)->take(4)->get();
        return view('general.properties.show',compact('property','relatedProperties'));
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
