<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view user', ['only' => ['index']]);
        $this->middleware('permission:create user', ['only' => ['create','store']]);
        $this->middleware('permission:update user', ['only' => ['update','edit']]);
        $this->middleware('permission:delete user', ['only' => ['destroy']]);
    }

    public function index()
    {
        $users = User::get();
        
        return view('role-permission.user.index', ['users' => $users]);
    }

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('role-permission.user.create', ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|max:20',
            'roles' => 'required'
        ]);

        $user = User::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                    ]);

        $user->syncRoles($request->roles);

        return redirect('/users')->with('status','User created successfully with roles');
    }

    public function edit(User $user)
    {
        $roles = Role::pluck('name','name')->all();
        $userRoles = $user->roles->pluck('name','name')->all();
        return view('role-permission.user.edit', [
            'user' => $user,
            'roles' => $roles,
            'userRoles' => $userRoles
        ]);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|max:20',
            'roles' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if(!empty($request->password)){
            $data += [
                'password' => Hash::make($request->password),
            ];
        }

        $user->update($data);
        $user->syncRoles($request->roles);

        return redirect('/users')->with('status','User Updated Successfully with roles');
    }

    public function destroy($userId)
    {
        $user = User::findOrFail($userId);
        $user->delete();

        return redirect('/users')->with('status','User Delete Successfully');
    }
        public function profile()
    {
		 return view('Pages/profile');
	}
	 public function editprofile()
    {
		 $edituser = Auth::user();
	 return view('Pages/edit-profile',compact('edituser'));
	}
    
    public function profileupdate(Request $request,$id)
    {
		 $valData =  $request->validate([           
          'profile_image' => 'image|mimes: jpeg,png,jpg,gif|max:2048',
            
        ]);
        if($request->file('profile_image'))
        {
            $file= $request->file('profile_image');
            $filename= time()."_".$file->getClientOriginalName();
            $file->move('uploads\profileimage', $filename, 'public');            
        }
        else{
			 $filename= $request->oldimage;
			}
       
		$data = User::find($id);
		$first_name = $request->first_name;
		$last_name = $request->last_name;
		
		$data->name = $first_name.' '.$last_name;
		$data->first_name = $request->first_name;
		$data->last_name = $request->last_name;
		$data->birthdate = $request->birthdate;
		$data->gender = $request->gender;
		$data->address = $request->address;
		$data->state = $request->state;
		$data->country = $request->country;
		$data->pincode = $request->pincode;
		$data->phonenumber = $request->phonenumber;
		$data->profile_image = $filename;
		$data->save();
		
	    return redirect()->route('profile')->with('message','Profile Updated Successfully');
		
	}
    
    
    
}
