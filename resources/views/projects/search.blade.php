@extends('layouts.app')
@section('content')



<div class="secSix" id="search" style="padding-top: 20px;">
	<div class="secSixTitle">
		<div class="secSixTitleContainer">
			<div class="secSixTitleMain">
                <h1 style="font-family: 'Staatliches', cursive; font-size:50px;"><strong>{{$project->title}}</strong></h1>
  				<h5 style="color:#598be5; font-family: 'Baloo Tammudu 2', cursive;"><i>ADD DESIGN TO PROJECT</i></h5>
			</div>
		</div>
	</div>
    <div class="secSixContainer" id="image">
        @foreach($dataArrays as $dataArray)
        <div class="secSixIcon" style="background: url('{{$dataArray->urls->small}}');"> 
            <div class="secSixIconTwo">
                <div class="inner">
<a href="./../../../../home/projects/inspiration/{{$dataArray->id}}/add?image_url={{urlencode($dataArray->urls->small)}}&description={{$dataArray->description}}&project_id={{$project->id}}">+ Add Design</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

