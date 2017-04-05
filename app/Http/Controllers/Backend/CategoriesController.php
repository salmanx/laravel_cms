<?php

namespace Rocket\Http\Controllers\Backend;

use Illuminate\Http\Request;

use Rocket\Models\Category;
use Rocket\Http\Requests;
use Rocket\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    protected $categories;

    public function __construct(Category $categories)
    {
        $this->middleware('auth');
        $this->categories = $categories;
    }

    public function index()
    {
     
    	$categories = $this->categories->all();

    	return view('backend.categories.index', ['categories' => $categories]);
    }

    public function create(Category $category)
    {
        return view('backend.categories.form', ['category' => $category]);
    }

    public function store(Requests\StoreCategoryRequest $request)
    {
        $this->categories->create(['author_id' => auth()->user()->id ] + $request->only('title', 'slug'));

        return redirect()
            ->route('backend.categories.index')
            ->with('success', 'You have successfully created a Category');
    }

    public function edit($id)
    {
       $category =  $this->categories->findOrFail($id);
       return view('backend.categories.form', ['category' => $category]);

    }

    public function update(Requests\UpdateCategoryRequest $request, $id)
    {
       $category =  $this->categories->findOrFail($id);

       $category->fill($request->only('title', 'slug'))->save();

       return redirect()
            ->route('backend.categories.edit', $category->id)
            ->with('success', 'You have successfully updated Category');
    }

    public function delete($id)
    {
       $category =  $this->categories->findOrFail($id);
       return view('backend.categories.delete', ['category' => $category]);    
    }

    public function destroy($id)
    {
       $category =  $this->categories->findOrFail($id);
       
       $category->delete();
       
       return redirect()
            ->route('backend.categories.index')
            ->with('success', 'You have successfully deleted Category');       
    }
}
