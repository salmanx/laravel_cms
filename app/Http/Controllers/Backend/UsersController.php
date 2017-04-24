<?php

namespace Rocket\Http\Controllers\Backend;

use Rocket\User;
use Illuminate\Http\Request;
use Rocket\Http\Requests;

class UsersController extends Controller
{
    protected $users;

    public function __construct(User $users)
    {
        $this->middleware('auth');
        $this->users = $users;
    }

    public function index()
    {
      // $users = $this->$users->all();
      
    	$users = $this->users->paginate(10);

    	return view('backend.users.index', ['users' => $users]);
    }

    public function create(User $user)
    {
        return view('backend.users.form', ['user' => $user]);
    }

    public function store(Requests\StoreUserRequest $request)
    {
        // $this->users->create($request->only('name', 'email', 'password'));

        $this->users->create([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'password' => bcrypt($request->input('password'))
        ]);

        return redirect()
            ->route('backend.users.index')
            ->with('success', 'You have successfully created a user');
    }

    public function edit($id)
    {
       $user =  $this->users->findOrFail($id);
       return view('backend.users.form', ['user' => $user]);

    }

    public function update(Requests\UpdateUserRequest $request, $id)
    {
       $user =  $this->users->findOrFail($id);

       $user->update([
          'name'     => $request->input('name'),
          'email'    => $request->input('email'),
          'password' => bcrypt($request->input('password'))          
        ]);
       
       return redirect()
            ->route('backend.users.edit', $user->id)
            ->with('success', 'You have successfully updated user');
    }

    public function delete(Requests\DeleteuserRequest $request, $id)
    {
       $user =  $this->users->findOrFail($id);
       return view('backend.users.delete', ['user' => $user]);    
    }

    public function destroy(Requests\DeleteuserRequest $request, $id)
    {
       $user =  $this->users->findOrFail($id);
       
       $user->delete();
       
       return redirect()
            ->route('backend.users.index')
            ->with('success', 'You have successfully deleted user');       
    }
}
