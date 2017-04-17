<?php

namespace Rocket\Templates;

use Illuminate\View\View;
use Rocket\Models\Adminstration;

class SingleAdminstrationTemplate extends AbstractTemplate
{
	protected $view = 'single_adminstration';

	protected $admins;

	public function __construct(Adminstration $admins)
	{
		$this->admins = $admins;
	}

	public function prepare(View $view, array $parameters)
	{
		$admin = $this->admins->where('id', $parameters['id'])->first();
		
		$view->with('admin', $admin);				 	
	}
}