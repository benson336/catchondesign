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

<form class="form-signin" action="./add/search" id="searchFrom" method="POST">
@csrf
    <div class="secSix" id="search" style="padding-top: 20px; background-color:#F5F5F5;">
	<div class="secSixTitle">
		<div class="secSixTitleContainer">
			<div class="secSixTitleMain">
                <h3 style="font-family: 'Staatliches', cursive; font-size:50px;"><strong>{{$project->title}}</strong></h3>
				        <h4 style="color:#598be5; font-family: 'Baloo Tammudu 2', cursive;"><strong>Search your Ideas</strong></h4>
                <input id="searchKey" class="searchSpace" name="searchTerm" type="text" value="" placeholder="Enter terms..." >
	            <button name="submit" type="submit" class="searchButton form-outline">Search</button>
              
			</div>
		</div>
	</div>
    </div>
    
</form>








   







@endsection