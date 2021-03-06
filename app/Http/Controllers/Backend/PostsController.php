<?php

namespace Rocket\Http\Controllers\Backend;

use Rocket\Models\Post;
use Rocket\Models\Category;
use Illuminate\Http\Request;
use Rocket\Http\Requests;

class PostsController extends Controller
{
    protected $posts;

    public function __construct(Post $posts, Category $categories)
    {
        $this->middleware('auth');
        
        $this->posts = $posts;

        $this->categories = $categories;
    }

    public function index()
    {
     
    	$posts = $this->posts->with('author')->orderBy('published_at', 'desc')->paginate(10);

    	return view('backend.posts.index', ['posts' => $posts]);
    }

    public function create(Post $post)
    {
        $categories = $this->categories->where('hidden', false)->get();

        return view('backend.posts.form', ['post' => $post, 'categories' => $categories]);
    }

    public function store(Requests\StorePostRequest $request)
    {

        $post = $this->posts->create(['author_id' => auth()->user()->id] + $request->only('title',  'body', 'excerpt', 'published_at', 'status', 'slug'));

      // dd($this->sanitize($request->input('title')));      

        if ($post->save()) {
          $post->categories()->attach($request->input('category'));
        }

        return redirect()
            ->route('backend.posts.index')
            ->with('success', 'You have successfully created a post');
    }

    public function edit($id)
    {
       $post =  $this->posts->findOrFail($id);
        
       $categories = $this->categories->where('hidden', false)->get();
       
       return view('backend.posts.form', ['post' => $post, 'categories' => $categories]);

    }

    public function update(Requests\UpdatePostRequest $request, $id)
    {
       $post =  $this->posts->findOrFail($id);

       $saved = $post->fill($request->only('title', 'slug', 'body', 'excerpt', 'published_at', 'status'))->save();

       if ($saved) {
          $post->categories()->attach($request->input('category'));
       }       

       return redirect()
            ->route('backend.posts.edit', $post->id)
            ->with('success', 'You have successfully updated post');
    }

    public function delete($id)
    {
       $post =  $this->posts->findOrFail($id);
       
       return view('backend.posts.delete', ['post' => $post]);    
    }

    public function destroy($id)
    {
       $post =  $this->posts->findOrFail($id);
       
       $post->delete();
       
       return redirect()
            ->route('backend.posts.index')
            ->with('success', 'You have successfully deleted post');       
    }


}
