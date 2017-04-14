<?php

namespace Rocket\Templates;

use Illuminate\View\View;
use Rocket\Models\Notice;
use Carbon\Carbon;

class AllNoticesTemplate extends AbstractTemplate
{
	protected $view = 'all_notices';

	protected $notice;

	public function __construct(Notice $notice)
	{
		$this->notice = $notice;
	}

	public function prepare(View $view, array $parameters)
	{
		$notices = $this->notice->all();
		
		$view->with('notices', $notices);				 	
	}
}