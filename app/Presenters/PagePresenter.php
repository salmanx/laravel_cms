<?php 

namespace Rocket\Presenters;

use Lewis\Presenter\AbstractPresenter;

class PagePresenter extends AbstractPresenter
{

	public function uri_wildcard()
	{
		return $this->uri.'*';
	}

	public function preetyUri()
	{
	    return '/'.ltrim($this->uri, '/');
	}	

	public function linkToPaddedtitle($link)
	{
		$padding = str_repeat('&nbsp;', $this->depth * 6);

		return $padding.link_to($link, $this->title);
	}
	


	public function paddedTitle()
	{
		return str_repeat('&nbsp;', $this->depth * 6).$this->title;
	}

}