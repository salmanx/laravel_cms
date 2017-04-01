<?php

namespace Rocket\Http\Controllers;

use Illuminate\Http\Request;

use Rocket\Http\Requests;
use Rocket\Models\Page;

class PagesController extends Controller
{
    public function show(Page $page, array $parameters)
    {
    	$this->prepareTemplate($page, $parameters);

    	return view('page', ['page' => $page]);
    }

    protected function prepareTemplate(Page $page, array $parameters)
    {
    	$templates = config('rocket.templates');

    	if (! $page->template || ! isset($templates[$page->template])) {
    		return;
    	}

    	$template = app($templates[$page->template]);

    	$view = sprintf('templates.%s', $template->getView());

    	if (! view()->exists($view)) {
    		return;
    	}

    	$template->prepare($view = view($view), $parameters);

    	$page->view = $view;
    }
}
