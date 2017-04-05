<?php

namespace Rocket\Templates;

use Illuminate\View\View;
use Rocket\Models\Post;
use Rocket\Models\Category;
use Carbon\Carbon;

class HomeTemplate extends AbstractTemplate
{
	protected $view = 'home';

	protected $posts;

	protected $categories;

	public function __construct(Post $posts, Category $categories)
	{
		$this->posts = $posts;

		$this->categories = $categories;
	}

	public function prepare(View $view, array $parameters)
	{
		$posts = $this->posts->with('author')
						 ->where('published_at', '<', Carbon::now())
						 ->orderBy('published_at', 'desc')
						 ->take(3)
						 ->get();

		$categories = $this->categories->all();

		$view->with('posts', $posts)
			 ->with('categories', $categories);				 	
	}
}