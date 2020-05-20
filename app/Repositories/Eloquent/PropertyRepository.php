<?php 

namespace App\Repositories\Eloquent;

/**
 * 
 */
class PropertyRepository extends Repository
{

	public function model()
	{
		return 'App\Models\Property';
	}

	public function properties()
	{
		return $this->model;
	}

	public function store($request)
	{
		$inputs = $request->except(['files']);
        $property = $this->create($inputs);
		if($request->hasFile('files'))
        {
			foreach ($request->file('files') as $key => $file) {
                $data = $this->uploadPhoto($file, "uploads/properties/{$property->id}", null, 499, 499);

				$property->images()->create(['name' => $data['originalFileName'], 'path' => $data['photo_path'], 'mime_type' => $data['mime_type'], 'size' => $data['file_size']]);
            }
		}

		if($request->has('amenities') && count($request->amenities) > 0){
			$property->amenities()->syncWithOutDetaching($request->amenities);
		}
		
		return $property;
	}

	public function renew($request, $property_id)
	{
		$property = $this->requiredById($property_id);
		$inputs = $request->except(['files']);
        $property->update($inputs);
        if($request->hasFile('files')){
			foreach ($request->file('files') as $key => $file) {

				$data = $this->uploadPhoto($file, "uploads/properties/{$property->id}", null, 499, 499);

				$property->images()->create(['name' => $data['originalFileName'], 'path' => $data['photo_path'], 'mime_type' => $data['mime_type'], 'size' => $data['file_size']]);
			}
		}
		$property->amenities()->sync($request->has('amenities') ? $request->amenities : []);

		return $property;
    }
    
    public function uploadImage($request, $property_id)
	{
		$property = $this->requiredById($property_id);


		if($request->hasFile('files')){
			if(is_array($request->file('files'))){
				foreach ($request->file('files') as $key => $file) {

					$data = $this->uploadPhoto($file, "uploads/properties/{$property->id}", null, 499, 499);

					$property->images()->create(['name' => $data['originalFileName'], 'path' => $data['photo_path'], 'mime_type' => $data['mime_type'], 'size' => $data['file_size']]);
				}
			}else{
				$data = $this->uploadPhoto($request->file('files'), "uploads/properties/{$property->id}", null, 499, 499);

				$property->images()->create(['name' => $data['originalFileName'], 'path' => $data['photo_path'], 'mime_type' => $data['mime_type'], 'size' => $data['file_size']]);
			}
		}

		return $property;
	}

	public function deleteImage($request, $property_id, $image_id)
	{
		$property = $this->requiredById($property_id);

		$image = $property->images()->where('id', $image_id)->first();

		if (file_exists($file_name = $image->path)) {

            if (in_array(strtolower($image->mime_type), ['jpg', 'jpeg', 'png', 'svg', 'gif', 'tif', 'tif lzw', 'tiff', 'raw'])) {
                $image_thumbnail = getThumbnail($file_name);
                
                if(file_exists($image_thumbnail)){
                    unlink($image_thumbnail);
                }

                $image_small_thumbnail = getSmallThumbnail($file_name);

                if(file_exists($image_small_thumbnail)){
                    unlink($image_small_thumbnail);
                }
            }

            unlink($file_name);
        }

        $image->forceDelete();

        return $property;
	}
	public function getLists($request)
	{
	    $properties = $this->getPropertiesForLists($request)->paginate(20);

	    return $this->formatForLists($properties);
	}

	public function getPropertiesForLists($request)
	{
		return $this->model
	        ->when($request->q, function($q) use($request){
	            return $q->where('name', 'like', "%{$request->q}%");
	        });
	}

}