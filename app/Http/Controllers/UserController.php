<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('users.index')->with('users', $users);
    }

    public function create()
    {
        return view('users.create');
    }

    public function edit(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        return view('users.edit')->with('user',$user);
    }

    function store(Request $request)
    {
        //return request()->all();
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role,
        ]);
        return redirect()->route('user');
    }

    public function update(Request $request){
        User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            ]);
        return redirect()->route('user');
    }
    

    public function delete(Request $request)
    {
        $user = User::where('id', $request->id)->first()->delete();
        return redirect()->route('user');
    }
}
