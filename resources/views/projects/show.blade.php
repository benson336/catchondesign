@extends('layouts.app')

@section('content')

	<div class="secSixTitle" style="padding-top:20px; margin-bottom:10px;">
		<div class="secSixTitleContainer">
			<div class="secSixTitleMain">
				<h1 style="font-family: 'Staatliches', cursive; font-size:50px;"><strong>{{$project->title}}</strong></h1>
  				<h5 style="color:#598be5; font-family: 'Baloo Tammudu 2', cursive;"><i>All Inspirations</i></h5>
			</div>
		</div>
	</div>
<div class="card-body" style="display:block; text-align:center;">
    <button type="button" class="btn btn-success col-md-1"><a style="color:white; text-decoration:none;" href="./{{$project->id}}/add">+ Design</a></button>
</div>
@if(count($project->inspirations) > 0)
<div class="img-section">
<div class="secThree">
<div class="secThreeContainer" id="image">
    <!--<div class="row">-->
        @foreach($project->inspirations as $inspiration)
        <!--<div class="col-md-3 box">-->

            <div class="secThreeImg">
                <img src="{{$inspiration->image_url}}" width="auto" height="300">
                <div class="secThreeImgBox">
                <p style="font-size:14px;"><strong>{{$inspiration->description}}</strong></p>
                <button type="button" class="btn btn-danger">
                <a style="color:white; text-decoration:none;" href="./{{$project->id}}/inspiration/{{$inspiration->image_info}}/delete">
                Delete
                </a>
                </button>
                </div>
            </div>


            
        <!--</div>-->
        @endforeach
    <!--</div>-->
</div>
</div>
</div>
@endif






@if(count($project->inspirations) === 0)
<div class="card-body" style="display:block; text-align:center;">
    <h5 class="card-title">-No Design found-</h5>
</div>
@endif

<!--<h1>{{$project->title}}</h1>
<h3>Author: {{$project->user->name}}'s Project</h3>-->

<!--<div class="secSixContainer" id="image">
	<div class="secSixIcon" style="background: url('+filteredArray[i].urls.small+');"></div>
</div>-->

@endsection