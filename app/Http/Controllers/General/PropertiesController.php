<?php

namespace App\Http\Controllers\General;

use App\Models\User;
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
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function index()
    {

        $properties = authUser()->properties;
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
            'status' => ['required'],
            'category' => ['required'],
            'type' => ['required'],
            'property_face' => ['required'],
            'road_width' => ['required','integer'],
            'road_type' => ['required'],
            'road_unit' => ['required'],
            'built_year' => ['required','integer'],
            'furnish' => ['required'],
            'kitchen' => ['required'],
            'bedroom' => ['required'],
            'living_room' => ['required'],
            'bathroom' => ['required'],
            'is_published' => ['required'],
            'title' => ['required'],
            'price' => ['required','integer'],
            'price_unit' => ['required'],
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
    public function showProperty($id)
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
        $message = [
            'status' => 'Property deleted.'
        ];
        if(request()->ajax() || request()->wantsJson()){
            return response()->json($message);
        }
        return redirect()->route('properties.index')->withStatus('Property Deleted');
    }

    public function search(Request $request)
    {
        $search = $request->s? :null;
        $status = $request->status? :'rent';
        $category = $request->category? :null;
        $type = $request->type? :null;
        $property_face = $request->property_face? :null;
        $price = $request->price? :null;
        $area = $request->area? :null;
        $properties = $this->propertyRepo->properties();
        if ($request->has('status')) {
            $properties = $properties->where('status',$status);
        }
        if ($search) {
            $properties = $properties
            ->where(function($query) use($search){
                return $query
                ->where('title', 'like', "%{$search}%");
            });
        }
        if ($request->has('category')) {
            $properties = $properties->where('category',$category);
        }
        if ($request->has('type')) {
            $properties = $properties->where('type',$type);
        }
        if ($request->has('property_face')) {
            $properties = $properties->where('property_face',$property_face);
        }
        if ($request->has('price')) {
            $properties = $properties->where('price','<=',$price);
        }
        if ($request->has('area')) {
            $properties = $properties->where(function($query) use($area){
                return $query
                    ->where('address_line_1', 'like', "%{$area}%");
            });
        }
        $properties = $properties->paginate(12);
        return view('general.properties.buyrent',compact('properties','search','status','category','price','type','property_face', 'area'));
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
