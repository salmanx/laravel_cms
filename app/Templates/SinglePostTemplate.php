<?php

namespace Rocket\Templates;

use Illuminate\View\View;
use Rocket\Models\Post;
use Carbon\Carbon;

class SinglePostTemplate extends AbstractTemplate
{
	protected $view = 'single_post';

	protected $posts;

	public function __construct(Post $posts)
	{
		$this->posts = $posts;
	}

	public function prepare(View $view, array $parameters)
	{
		$post = $this->posts->where('id', $parameters['id'])->first();
		
		$view->with('post', $post);				 	
	}
}