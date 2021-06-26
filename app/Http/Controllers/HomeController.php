<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use Auth;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $loginedUser = User::where('id', Auth::id())->first();
        $allUsers = User::all();
        $allProjects = Project::all();
        //return $loginedUser->projects;
        return view('home')->with('loginedUser', $loginedUser)->with('allUsers', $allUsers)->with('allProjects', $allProjects);
    }
}
