<?php

namespace Rocket\Templates;

use Illuminate\View\View;
use Rocket\Models\Post;
use Rocket\Models\Category;
use Rocket\Models\Notice;
use Rocket\Models\News;
use Rocket\Models\Adminstration;
use Rocket\Models\Slider;
use Carbon\Carbon;

class HomeTemplate extends AbstractTemplate
{
	protected $view = 'home';

	protected $posts;

	protected $categories;

	protected $notices;

	protected $news;

	protected $adminstrations;

	protected $sliders;

	public function __construct(Post $posts, Category $categories, Notice $notices, News $news, Adminstration  $adminstrations, Slider $sliders)
	{
		$this->posts = $posts;

		$this->categories = $categories;

		$this->notices = $notices;

		$this->news = $news;

		$this->adminstrations = $adminstrations;

		$this->sliders = $sliders;
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

		$adminstrations = $this->adminstrations->orderBy('lft', 'asc')->take(4)->get();

		$sliders = $this->sliders->take(7)->get();

		$view->with('categories', $categories)
			 ->with('notices', $notices)
			 ->with('news', $news)
			 ->with('adminstrations', $adminstrations)
			 ->with('sliders', $sliders);				 	
	}
}