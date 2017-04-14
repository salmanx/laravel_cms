<?php

namespace Rocket\Http\Controllers\Backend;

use Rocket\Models\News;
use Illuminate\Http\Request;
use Rocket\Http\Requests;

class NewsController extends Controller
{
    protected $news;

    public function __construct(News $news)
    {
        $this->middleware('auth');

        $this->news = $news;
    }

    public function index()
    {
     
    	$news = $this->news->paginate(10);

    	return view('backend.news.index', ['news' => $news]);
    }

    public function create(News $news)
    {
        return view('backend.news.form', ['news' => $news]);
    }

    public function store(Requests\StoreNewsRequest $request)
    {

        $this->news->create( $request->only('title', 'slug', 'body', 'status', 'published_at') );

        return redirect()
            ->route('backend.news.index')
            ->with('success', 'You have successfully created a news');
    }

    public function edit($id)
    {
       $news =  $this->news->findOrFail($id);
             
       return view('backend.news.form', ['news' => $news]);

    }

    public function update(Requests\UpdateNewsRequest $request, $id)
    {
       $news =  $this->news->findOrFail($id);

       $news->fill($request->only('title', 'slug', 'body', 'status', 'published_at'))->save();

       return redirect()
            ->route('backend.news.edit', $news->id)
            ->with('success', 'You have successfully updated news');
    }

    public function delete($id)
    {
       $news =  $this->news->findOrFail($id);
       return view('backend.news.delete', ['news' => $news]);    
    }

    public function destroy($id)
    {
       $news =  $this->news->findOrFail($id);
       
       $news->delete();
       
       return redirect()
            ->route('backend.news.index')
            ->with('success', 'You have successfully deleted news');       
    }
}
