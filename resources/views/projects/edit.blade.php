@extends('layouts.app')

@section('content')

<style>
html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>

<form class="form-signin" action="../{{$project->id}}" method="POST">
@method('PUT')
@csrf
      <h1 class="h3 mb-3 font-weight-normal">Edit Title</h1>

      <label for="title" class="sr-only">Name</label>
      <input type="text" class="form-control" name="title" value="{{$project->title}}" autofocus>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Save Change</button>

</form>

<!--<h1>Edit Project</h1>
<form action="../{{$project->id}}" method="POST">
@method('PUT')
@csrf
<label for="title">Title</label>
<input type="text" name="title" value="{{$project->title}}">
<div class="img-section">
    <div class="row">
        <div class="col-md-3 box">
        </div>
    </div>
</div>
<div class="secSixIcon" style="background: url('../../images/catalogFour.jpg');"></div>'
<button type="submit">Save</button>
</form>

<div class="img-section">
<div class="secSix desktopVisibility">
<div class="secSixContainer" id="image">
    <div class="row">
    @foreach($project->inspirations as $inspiration)
        <div class="col-md-3 box">
            <div class="secSixIcon" style="background:url('{{$inspiration->image_url}}');"></div>
            <a href="./inspiration/{{$inspiration->image_info}}/delete">Delete</a>
        </div>
    @endforeach
    </div>
</div>
</div>
</div>-->



@endsection

