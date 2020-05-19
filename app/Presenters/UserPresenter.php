<?php

namespace App\Presenters;

class UserPresenter extends Presenter{

	/**
	 * find url for profile picture
	 * @return mixed 
	 */
	public function profilePicture()
	{
		$value = $this->entity->profile_picture;
		return asset($value ? getSmallThumbnail($value) : 'lte/dist/img/avatar6.png');
	}

	/**
	 * find profile thumbnail
	 * @return mixed 
	 */
	public function thumbnail()
	{
		$value = $this->entity->profile_picture;
		return asset($value ? getThumbnail($value) : 'lte/dist/img/avatar6.png');
	}
	
}