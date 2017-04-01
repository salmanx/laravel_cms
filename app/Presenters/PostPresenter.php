<?php 

namespace Rocket\Presenters;

use Lewis\Presenter\AbstractPresenter;

class PostPresenter extends AbstractPresenter
{
	public function publishedDate()
	{
		if ($this->published_at) {
			return $this->published_at->toFormattedDateString();
		}

		return 'Not published';
	}

	public function publishedHighlight()
	{
		if ($this->published_at && $this->published_at->isFuture()) {
			return 'info';
		} elseif (!$this->published_at) {
			return 'warning';
		}
	}



}