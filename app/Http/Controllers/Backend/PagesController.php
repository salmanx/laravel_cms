<?php

namespace Rocket\Http\Controllers\Backend;

use Illuminate\Http\Request;

use Rocket\Models\Page;
use Rocket\Http\Requests;
use Rocket\Http\Controllers\Controller;

class PagesController extends Controller
{

    protected $pages;

    public function __construct(Page $pages)
    {
        $this->pages = $pages;
    }

    public function index()
    {
        $pages = $this->pages->all();

        return view('backend.pages.index', ['pages' => $pages]);
    }

    public function create(Page $page)
    {
        $templates = $this->getPageTemplates();

        return view('backend.pages.form', ['page' => $page, 'templates' => $templates]);
    }

    public function store(Requests\StorePageRequest $request)
    {
        $this->pages->create($request->only('title', 'name', 'uri', 'content', 'template'));

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

        return view('backend.pages.form', ['page' => $page, 'templates' => $templates]);
    }

    public function update(Requests\UpdatePageRequest $request, $id)
    {
        $page = $this->pages->findOrFail($id);

        $page->fill($request->only('title', 'name', 'uri', 'content', 'template'))->save();

        return redirect()
            ->route('backend.pages.edit', $page->id)
            ->with('success', 'You have successflly update a page');        
    }

    public function delete($id)
    {
        $page = $this->pages->findOrFail($id);

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
}
