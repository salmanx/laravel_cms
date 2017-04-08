<?php

namespace Rocket\Http\Controllers\Backend;

use Rocket\Models\Notice;
use Illuminate\Http\Request;
use Rocket\Http\Requests;

class NoticesController extends Controller
{
    protected $notices;

    public function __construct(Notice $notices)
    {
        $this->middleware('auth');

        $this->notices = $notices;
    }

    public function index()
    {
     
    	$notices = $this->notices->all();

    	return view('backend.notices.index', ['notices' => $notices]);
    }

    public function create(Notice $notice)
    {
        return view('backend.notices.form', ['notice' => $notice]);
    }

    public function store(Requests\StoreNoticeRequest $request)
    {

        $notice = $this->notices->create( $request->only('title', 'slug', 'body') );

        return redirect()
            ->route('backend.notices.index')
            ->with('success', 'You have successfully created a notice');
    }

    public function edit($id)
    {
       $notice =  $this->notices->findOrFail($id);
             
       return view('backend.notices.form', ['notice' => $notice]);

    }

    public function update(Requests\UpdateNoticeRequest $request, $id)
    {
       $notice =  $this->notices->findOrFail($id);

       $notice->fill($request->only('title', 'slug', 'body'))->save();

       return redirect()
            ->route('backend.notices.edit', $notice->id)
            ->with('success', 'You have successfully updated notice');
    }

    public function delete($id)
    {
       $notice =  $this->notices->findOrFail($id);
       return view('backend.notices.delete', ['notice' => $notice]);    
    }

    public function destroy($id)
    {
       $notice =  $this->notices->findOrFail($id);
       
       $notice->delete();
       
       return redirect()
            ->route('backend.notices.index')
            ->with('success', 'You have successfully deleted notice');       
    }
}
