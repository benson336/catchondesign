@extends('layouts.app')

@section('content')

<input type="checkbox" id="sidebar-toggle">

<div class="sidebar">
    <div class="sidebar-header">
        <h3 class="brand">
            <i class="fas fa-home"></i>
            <span style="font-size:25px;">Dashboard</span>
        <h3>
        <!--<label for="sidebar-toggle" class="ti-menu-alt"></label>-->
    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="../home">
                    <span class="ti-eye"></span>
                    <span class="t1">Overview</span>
                </a>
            </li>
            <li>
                <a href="./users">
                    <span class="ti-face-smile"></span>
                    <span class="t1">Users</span>
                </a>
            </li>
            <li>
                <a href="./projects">
                    <span class="ti-agenda"></span>
                    <span class="t1">Projects</span>
                </a>
            </li>
            <li>
                <a href=".././">
                    <span class="ti-folder"></span>
                    <span class="t1">Frontpage</span>
                </a>
            </li>
        </ul>
    </div>
</div>



<div class="main-content">
    <main>
        <div class="row">
            <h2 class="col-md-11">All Projects</h2>
            <button type="button" class="btn btn-success col-md-1"><a style="color:white; text-decoration:none;" href="./projects/create">+ Project</a></button>
        </div>
         @if(count($projects) === 0)
                <div class="card-body" style="display:block; text-align:center;">
                <h5 class="card-title">-No Project found-</h5>
                </div>
        @endif
        @if(count($projects) > 0)
        <table style="width:100%">
            <tr>
                <th>Project ID</th>
                <th>Title (Click to View Designs)</th> 
                <th>Action</th>
            </tr>
            @foreach($projects as $project)  
            <tr>
                <td><h6 style="font-family: 'Baloo Tammudu 2', cursive; margin:0px; padding:0px;">{{$project->id}}</h6></td>
                <td><h6 style="font-family: 'Baloo Tammudu 2', cursive; margin:0px; padding:0px;"><a style="text-decoration:none;" href="./projects/{{$project->id}}">{{$project->title}}</a></h6></td>
                <td><button type="button" class="btn btn-success"><a style="color:white; text-decoration:none;" href="./projects/{{$project->id}}">+ Design</a></button></td>
                <td><button type="button" class="btn btn-secondary"><a style="color:white; text-decoration:none;" href="./projects/{{$project->id}}/edit">Edit</a></button></td>
                <td><button type="button" class="btn btn-danger"><a style="color:white; text-decoration:none;" href="./projects/{{$project->id}}/delete">Delete</a></button></td>
            </tr>
            @endforeach
        </table>
        @endif
    </main>
</div>

@endsection
