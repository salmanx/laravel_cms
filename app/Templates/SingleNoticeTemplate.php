<?php

namespace Rocket\Templates;

use Illuminate\View\View;
use Rocket\Models\Notice;
use Carbon\Carbon;

class SingleNoticeTemplate extends AbstractTemplate
{
	protected $view = 'single_notice';

	protected $notices;

	public function __construct(Notice $notices)
	{
		$this->notices = $notices;
	}

	public function prepare(View $view, array $parameters)
	{
		$notice = $this->notices->where('id', $parameters['id'])->where('slug', $parameters['slug'])->first();
		
		$view->with('notice', $notice);				 	
	}
}