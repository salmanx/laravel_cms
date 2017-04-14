<?php 

namespace Rocket\Presenters;

use Lewis\Presenter\AbstractPresenter;

class PostPresenter extends AbstractPresenter
{
	public function publishedDate()
	{

		if ($this->published_at && $this->status == 1) {
			return $this->published_at->toFormattedDateString();
		} 

		return "Saved as draft";
	}

	public function publishedHighlight()
	{
		if ($this->published_at->isFuture() || $this->status == 0) {
			return 'info';
		} elseif (!$this->published_at) {
			return 'warning';
		}
	}

	public function isPublic()
	{
		if (($post->status == 1) && ($post->published_at < Carbon\Carbon::now()) ){
			return false;
		} else {
			return true;
		}	
	}



}