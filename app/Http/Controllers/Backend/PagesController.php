<?php

namespace Rocket\Http\Controllers\Backend;

use Illuminate\Http\Request;

use Rocket\Models\Page;
use Rocket\Http\Requests;
use Rocket\Http\Controllers\Controller;
use Baum\MoveNotPossibleException;

class PagesController extends Controller
{

    protected $pages;

    public function __construct(Page $pages)
    {
        $this->pages = $pages;
        
        $this->middleware('auth');
    }

    public function index()
    {
        $pages = $this->pages->paginate(10);

        return view('backend.pages.index', ['pages' => $pages]);
    }

    public function create(Page $page)
    {
        $templates = $this->getPageTemplates();

        $orderPages = $this->pages->where('hidden', false)->orderBy('lft', 'asc')->get();      

        return view('backend.pages.form', ['page' => $page, 'templates' => $templates, 'orderPages' => $orderPages]);

        // return view('backend.pages.new');

    }

    public function store(Requests\StorePageRequest $request)
    {
        $page = $this->pages->create($request->only('title', 'name', 'uri', 'body', 'template', 'hidden'));

        $this->updatePageOrder($page, $request);

        return redirect()
            ->route('backend.pages.index')
            ->with('success', 'You have successflly created a page');
    }

    // public function show($id)
    // {
    //     //
    // }

    public function edit($id)
    {
        $page = $this->pages->findOrFail($id);

        $templates = $this->getPageTemplates();

        $orderPages = $this->pages->where('hidden', false)->orderBy('lft', 'asc')->get();      

        return view('backend.pages.form', ['page' => $page, 'templates' => $templates, 'orderPages' => $orderPages]);


        // return view('backend.pages.new', ['page' => $page]);
    }

    public function update(Requests\UpdatePageRequest $request, $id)
    {
        $page = $this->pages->findOrFail($id);

        if ($response = $this->updatePageOrder($page, $request)) {
            return $response;
        }

        $page->fill($request->only('title', 'name', 'uri', 'body', 'template', 'hidden'))->save();

        return redirect()
            ->route('backend.pages.edit', $page->id)
            ->with('success', 'You have successflly update a page');        
    }

    public function delete($id)
    {
        $page = $this->pages->findOrFail($id);

        foreach ($page->children as $child) {
            $child->makeRoot();
        }

        return view('backend.pages.delete', ['page' => $page]);
    }

    public function destroy($id)
    {
        $page = $this->pages->findOrFail($id);

        $page->delete();

        return redirect()
            ->route('backend.pages.index')
            ->with('success', 'You have successflly deleted a page');        
    }

    protected function getPageTemplates()
    {
        $templates = config('rocket.templates');

        return ['' => ''] + array_combine(array_keys($templates), array_keys($templates));
    }

    protected function updatePageOrder(Page $page, Request $request)
    {
        if ($request->has('order', 'orderPage')) {
            try{
                $page->updateOrder($request->input('order'), $request->input('orderPage'));
            } catch(MoveNotPossibleException $e){
                return redirect()
                    ->route('backend.pages.edit', $page->id)
                    ->withInput()
                    ->withErrors([ 'error' => 'You can not make the page child of it self']);
            }
        }
    }
}
