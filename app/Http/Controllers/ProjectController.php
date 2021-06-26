<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Inspiration;
use Auth;
use GuzzleHttp\Client;

class ProjectController extends Controller
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
    
    public function index(){
        //$projects = Post::get();
        $projects = Project::where('user_id', Auth::id())->get();
        return view('projects.index')->with('projects',$projects);
    }

    public function create(){
        return view('projects.create');
    }

    public function store(Request $request){
        //return request()->all();
        Project::create([
            'title' => $request->title,
            'user_id' => Auth::id(),
            //auth()->user()->id;
        ]);
        return redirect()->route('project');
    }

    public function show(Request $request){
        $project = Project::where('id', $request->id)->first();
        //return $project->inspirations;
        return view('projects.show')->with('project', $project);
    }

    public function add(Request $request){
        $project = Project::where('id', $request->id)->first();
        return view('projects.add')->with('project', $project);
        //return view('projects.add')->with('dataArrays', $dataArray)->with('project', $project);
        //return $project->title;
    }

    public function search(Request $request){
        $client = new Client();
        $result = $client->request('GET', 'https://api.unsplash.com/search/photos',
        [
            "query" => [
                "query" => $request->searchTerm,
                "client_id" => env("UNSPLASH_KEY"),
            ]
        ]);
        $data = $result->getBody();
        //return $data;
        $decodedData = json_decode($data);
        $dataArrays = [];
        foreach($decodedData->results as $result){
            array_push($dataArrays, $result);
        }

        $project = Project::where('id', $request->id)->first();
        return view('projects.search')->with('project', $project)->with('dataArrays', $dataArrays);
    }

    public function edit(Request $request){
        //$project = Project::find($request->id);
        $project = Project::where('id', $request->id)->first();
        return view('projects.edit')->with('project',$project);
    }

    public function update(Request $request){
        Project::where('id', $request->id)->update([
            'title' => $request->title,
            'user_id' => Auth::id(),
            ]);
        return redirect()->route('project');
    }

    public function destroy(Request $request){
        //$project = Project::where('id', $request->id)->delete();
        //$project->deleteRelated();
        $project = Project::where('id', $request->id)->first()->delete();
        return redirect()->route('project');
    }


    
}
