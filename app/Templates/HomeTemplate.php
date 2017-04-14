<?php

namespace Rocket\Templates;

use Illuminate\View\View;
use Rocket\Models\Post;
use Rocket\Models\Category;
use Rocket\Models\Notice;
use Rocket\Models\News;
use Carbon\Carbon;

class HomeTemplate extends AbstractTemplate
{
	protected $view = 'home';

	protected $posts;

	protected $categories;

	protected $notices;

	protected $news;

	public function __construct(Post $posts, Category $categories, Notice $notices, News $news)
	{
		$this->posts = $posts;

		$this->categories = $categories;

		$this->notices = $notices;

		$this->news = $news;
	}

	public function prepare(View $view, array $parameters)
	{

		$notices = $this->notices->orderBy('created_at', 'desc')
						 ->where('published_at', '<', Carbon::now())
						 ->where('status', 1)
						 ->orderBy('published_at', 'desc')						 
						 ->take(5)
						 ->get();

		$news = $this->news->orderBy('created_at', 'desc')
						 ->where('published_at', '<', Carbon::now())
						 ->where('status', 1)	
						 ->orderBy('published_at', 'desc')			 	
						 ->take(5)
						 ->get();						 						 

		$categories = $this->categories->where('hidden', false)->get();

		$view->with('categories', $categories)
			 ->with('notices', $notices)
			 ->with('news', $news);				 	
	}
}