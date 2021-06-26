<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspiration;
use App\Models\Project;

class InspirationController extends Controller
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
    
    public function create(Request $request){
        //return request()->all();
        Inspiration::create([
            'project_id' => $request->project_id,
            'image_info' => $request->image_info,
            'image_url' => $request->image_url,
            'description' => $request->description,
        ]);
        return redirect()->route('project');
    }

    public function delete(Request $request){
        $inspiration = Inspiration::where('image_info', $request->image_info)->delete();
        /*$project = Project::where('id', $request->id)->first();
        return view('projects.edit')->with('project',$project);*/

        return redirect()->route('project');
}
}
