<?php

namespace Rocket\Http\Controllers\Backend;

use Rocket\Models\Adminstration;
use Illuminate\Http\Request;
use Rocket\Http\Requests;
use Baum\MoveNotPossibleException;

class AdminstrationsController extends Controller
{
    protected $adminstrations;

    public function __construct(Adminstration $adminstrations)
    {
        $this->middleware('auth');

        $this->adminstrations = $adminstrations;
    }

    public function index()
    {
     
        $adminstrations = $this->adminstrations->orderBy('lft', 'asc')->paginate(10);

        return view('backend.adminstrations.index', ['adminstrations' => $adminstrations]);
    }

    public function create(Adminstration $adminstration)
    {
        $orderAdminstrations = $this->adminstrations->all();

        return view('backend.adminstrations.form', [
          'adminstration' => $adminstration, 
          'orderAdminstrations' => $orderAdminstrations
        ]);
    }

    public function store(Requests\StoreAdminstrationsRequest $request)
    {

        // dd($request->input('all'));

        if ($request->hasFile('image')) {
            $file          = $request->file('image');
            $file_name     = time().'_'.$file->getClientOriginalName();
            $file_uploaded = $file->move('upload/adminstrations', $file_name);
            if (!$file_uploaded) {
                return redirect()
                    ->route('backend.adminstrations.index')
                    ->with('warning', 'Profile picture can not be uploaded.');                 
            }  
        } else {  
            $file_name = "";
        }      

        $adminstration = $this->adminstrations->create( ['image' => $file_name ] + $request->only('name', 'status', 'position', 'slug', 'body') );

        $this->updateStatusOrder($adminstration, $request);


        return redirect()
            ->route('backend.adminstrations.index')
            ->with('success', 'You have successfully created a adminstrations');
    }

    public function edit($id)
    {
       $adminstration =  $this->adminstrations->findOrFail($id);

       $orderAdminstrations = $this->adminstrations->all();
             
       return view('backend.adminstrations.form', [
          'adminstration' => $adminstration, 
          'orderAdminstrations' => $orderAdminstrations
        ]);

    }

    public function update(Requests\UpdateAdminstarationRequest $request, $id)
    {

      $adminstration =  $this->adminstrations->findOrFail($id);

      if ($response = $this->updateStatusOrder($adminstration, $request)) {
          return $response;
      }

      if ($request->hasFile('image')) {
          $file          = $request->file('image');
          $file_name     = time().'_'.$file->getClientOriginalName();
          $file_uploaded = $file->move('upload/adminstrations', $file_name);
          if (!$file_uploaded) {
              return redirect()
              ->route('backend.adminstrations.edit', $category->id)
              ->with('warning', 'Profile picture can not be uploaded.');                 
          }
      } else {
          $file_name = "";
      }

       $adminstration->fill(['image' => $file_name ] + $request->only('name', 'status', 'position', 'slug', 'body'))->save();

       return redirect()
            ->route('backend.adminstrations.edit', $adminstration->id)
            ->with('success', 'You have successfully updated adminstration');
    }

    public function delete($id)
    {
       $adminstration =  $this->adminstrations->findOrFail($id);
       return view('backend.adminstrations.delete', ['adminstration' => $adminstration]);    
    }

    public function destroy($id)
    {
       $adminstration =  $this->adminstrations->findOrFail($id);
       
       $adminstration->delete();
       
       return redirect()
            ->route('backend.adminstrations.index')
            ->with('success', 'You have successfully deleted adminstration');       
    }


    public function updateStatusOrder(Adminstration $adminstration, Request $request)
    {
        if ($request->has('order', 'orderAdminstration')) {
            try{
                $adminstration->updateOrder($request->input('order'), $request->input('orderAdminstration'));
            } catch(MoveNotPossibleException $e){
                return redirect()
                    ->route('backend.adminstrations.edit', $adminstration->id)
                    ->withInput()
                    ->withErrors([ 'error' => 'You can not make the adminstration child of it self']);
            }
        }
    }
}
