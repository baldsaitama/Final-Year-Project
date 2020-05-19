<?php

namespace App\Http\Controllers\Admin;

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amenities = $this->amenityRepo->paginate(['properties'], 20);

        return view('admin.amenities.index', compact('amenities'));
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
        $this->validate($request, [
            'name' => 'required|unique:amenities|max:200'
        ]);

        $amenity = $this->amenityRepo->create($request->all());

        if($request->ajax() || $request->wantsJson()){
            return response()->json([
                'status' => 'New amenity created',
                'view' => $this->renderIndexPartial($request),
                'id' => $amenity->id,
                'name' => $amenity->name
            ]);
        }

        return redirect('admin.amenities.index')->withStatus('New amenity created');
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
        $this->validate($request, [
            'name' => 'required|max:200|unique:amenities,id,'.$id
        ]);

        $amenity = $this->amenityRepo->requiredById($id);

        $amenity->update($request->all());
        if($request->ajax() || $request->wantsJson()){
            return response()->json([
                'status' => 'Amenity updated',
                'view' => $this->renderIndexPartial($request)
            ]);
        }

        return redirect('admin.amenities.index')->withStatus('Amenity updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $amenity = $this->amenityRepo->requiredById($id);
        $amenity->delete();
        return redirect()->back()->withStatus('Amenity Deleted');
    }

    protected function renderIndexPartial(Request $request)
    {
        $amenities = $this->amenityRepo->paginate(null, 20);
        $amenities->withPath('amenities');
        return view(
                'admin.amenities.index-body-content',
                compact('amenities')
            )->render();
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
