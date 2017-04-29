<?php

namespace Rocket\Templates;

use Illuminate\View\View;
use Rocket\Models\Notice;
use Rocket\Models\Adminstration;
use Carbon\Carbon;

class AllNoticesTemplate extends AbstractTemplate
{
	protected $view = 'all_notices';

	protected $notice;

	protected $adminstrations;

	public function __construct(Notice $notice, Adminstration  $adminstrations)
	{
		$this->notice = $notice;

		$this->adminstrations = $adminstrations;

	}

	public function prepare(View $view, array $parameters)
	{
		$notices = $this->notice->paginate(15);

		$adminstrations = $this->adminstrations->orderBy('lft', 'asc')->take(4)->get();	
		
		$view->with('notices', $notices)->with('adminstrations', $adminstrations);				 	
	}
}