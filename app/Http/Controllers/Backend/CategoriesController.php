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

    public function index(Category $category)
    {
     
    	$categories = $this->categories->paginate(10);

    	return view('backend.categories.index', ['categories' => $categories, 'category' => $category]);
    }

    public function store(Requests\StoreCategoryRequest $request)
    {
        if ($request->hasFile('image')) {
            $file          = $request->file('image');
            $file_name     = time().'_'.$file->getClientOriginalName();
            $file_uploaded = $file->move('upload/category', $file_name);
            if (!$file_uploaded) {
                return redirect()
                    ->route('backend.categories.index')
                    ->with('warning', 'Category picture can not be uploaded.');                 
            }  
        } else {  
            $file_name = "";
        }

        $this->categories->create(['image' => $file_name ] + $request->only('title', 'slug', 'hidden'));

        return redirect()
            ->route('backend.categories.index')
            ->with('success', 'You have successfully created a Category');
    }

    public function edit($id)
    {
      $category =  $this->categories->findOrFail($id);

      $categories = $this->categories->paginate(10);

      return view('backend.categories.index', ['categories' => $categories, 'category' => $category]);       

    }

    public function update(Requests\UpdateCategoryRequest $request, $id)
    {
        $category =  $this->categories->findOrFail($id);

        if ($request->hasFile('image')) {
            $file          = $request->file('image');
            $file_name     = time().'_'.$file->getClientOriginalName();
            $file_uploaded = $file->move('upload/category', $file_name);
            if (!$file_uploaded) {
                return redirect()
                ->route('backend.categories.edit', $category->id)
                ->with('warning', 'Category picture can not be uploaded.');                 
            }
        } else {
            $file_name = "";
        }

        $category->fill(['image' => $file_name ] + $request->only('title', 'slug', 'hidden'))->save();

        return redirect()
            ->route('backend.categories.edit', $category->id)
            ->with('success', 'You have successfully updated Category');

    }

    public function delete($id)
    {
      $category =  $this->categories->findOrFail($id);

      $categories = $this->categories->all();

      return view('backend.categories.delete', ['categories' => $categories, 'category' => $category]);         
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
