<?php 

namespace App\Repositories\Eloquent;

/**
 * 
 */
class AmenityRepository extends Repository
{

	public function model()
	{
		return 'App\Models\Amenity';
	}

	public function getLists($request)
	{
	    $amenities = $this->model
	        ->when($request->q, function($q) use($request){
	            return $q->where('name', 'like', "%{$request->q}%");
	        })->paginate(20);

	    $items['total'] = $amenities->total();

	    $items['items'] = $amenities->transform(function($item){
	        return [
	            'id' => $item->id,
	            'text' => $item->name
	        ];
	    });

	    return $items;
	}
}