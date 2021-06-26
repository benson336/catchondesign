
    /*public function result(){
        $client = new Client();
        $response = $client->request('GET',
        'https://api.unsplash.com/search/photos?query=forest&client_id=nabzPMEXICvZkH7xLxrpL5ieXswIVH4nfHFIxfQQOlk');
        $data = $response->getBody();
        $data = json_decode($data);
        //return $data->results;
        $filteredData = [];
        foreach($data->results as $result){
           array_push($filteredData, $result);
        }
        return view('pages.index', compact('filteredData'));
    }*/

<!--Oginal menu -->
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    </div>
=====================================================================
    #sidebar-toggle {
    display: none;
}

.sidebar {
    height: 100%;
    width: 240px;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 100;
    background: var(--main-color);
    color: #fff;
    overflow-y: auto;
    transition: width 500ms;
}

.sidebar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 60px;
    padding: 0rem 1rem;
}

.sidebar-menu {
    padding: 1rem;
}

.sidebar-menu ul {
    padding-left: 0px;
}

.sidebar li {
    margin-bottom: 1.2rem;
}

.sidebar a {
    color: #fff;
    font-size: 0.9rem;
    text-decoration: none;
}

.t1 {
    font-size: 17px;
}

.t1:hover {
    color: rgb(240, 148, 27);
    font-size: 18px;
}

.sidebar a span:last-child {
    padding-left: 0.6rem;
}

#sidebar-toggle:checked ~ .sidebar {
    width: 60px;
}

#sidebar-toggle:checked ~ .sidebar .sidebar-header h3 span,
#sidebar-toggle:checked ~ .sidebar li span:last-child {
    display: none;
}

#sidebar-toggle:checked ~ .sidebar .sidebar-header,
#sidebar-toggle:checked ~ .sidebar li {
    display: flex;
    justify-content: center;
}

#sidebar-toggle:checked ~ .main-content {
    margin-left: 60px;
}

#sidebar-toggle:checked ~ .main-content header {
    left: 60px;
}

.main-content {
    position: relative;
    margin-left: 240px;
    transition: margin-left 500ms;
}

header {
    position: fixed;
    top: 0;
    z-index: 100;
    width: 100%;
    background: #fff;
    height: 60px;
    padding: 0rem 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid #ccc;
    transition: left 500ms;
}

.search-wrapper {
    display: flex;
    align-items: center;
}

.search-wrapper input {
    border: 0;
    outline: 0;
    padding: 1rem;
    height: 38px;
}

.social-icons {
    display: flex;
    align-items: center;
}

.social-icons span,
.social-icons div {
    margin-left: 1.2rem;
}

.social-icons div {
    height: 40px;
    width: 40px;
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url(img/1.jpg);
    border-radius: 50%;
}

main {
    margin-top: 60px;
    background: #f1f5f9;
    min-height: 90vh;
    padding: 1rem 3rem;
}

.dash-title {
    color: var(--color-dark);
    margin-bottom: 1rem;
}

.dash-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-column-gap: 5rem;
}

.card-single {
    background: #fff;
    border-radius: 7px;
}

.card-body {
    padding: 1rem;
    display: flex;
    align-items: center;
}

.card-body span {
    font-sizel: 1.5rem;
    color: #777;
    padding-right: 1.4rem;
}

.card-body h5 {
    color: var(--text-grey);
    font-size: 1rem;
}

.card-body h4 {
    color: var(--color-dark);
    font-size: 1.1rem;
    margin-top: 0.2rem;
}

.card-footer {
    padding: 0.2rem 1rem;
    background: #f9fafc;
}

.card-footer a {
    color: var(--main-color);
}

.recent {
    margin-top: 3rem;
    margin-bottom: 3rem;
}

.activity-grid {
    display: grid;
    grid-template-columns: 75% 25%;
    grid-column-gap: 1.5rem;
}

.activity-card,
.summary-card,
.bday-card {
    background: #fff;
    border-radius: 7px;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
}

.activity-card h3 {
    color: var(--text-grey);
    padding: 0rem 1rem;
}

.activity-card table {
    width: 100%;
    border-collapse: collapse;
}

.activity-card thead {
    background: #efefef;
    text-align: left;
}

th,
td {
    font-size: 0.9rem;
    padding: 1rem 0.5rem;
    color: var(--color-dark);
}

td {
    font-size: 0.8rem;
}

tbody tr:nth-child(even) {
    background: #f9fafc;
}

.badge {
    padding: 0.2rem 1rem;
    border-radius: 20px;
    font-weight: 700;
    font-size: 0.7rem;
}

.badge.success {
    background: #def7ec;
    color: var(--main-color);
}

.badge.warning {
    background: #f0f6b2;
    color: orange;
}

.td-team {
    display: flex;
    align-items: center;
}

.img-1,
.img-2,
.img-3 {
    height: 38px;
    width: 38px;
    border-radius: 50%;
    margin-left: -15px;
    border: 3px solid #efefef;
    background-size: cover;
    background-repeat: no-repeat;
}

.img-1 {
    background-image: url(img/1.jpg);
}

.img-2 {
    background-image: url(img/2.jpg);
}

.img-3 {
    background-image: url(img/3.jpg);
}

.summary-card {
    margin-bottom: 1.5rem;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
.summary-single {
    padding: 0.5rem 1rem;
    display: flex;
    align-items: center;
}

.summary-single span {
    font-size: 1.5rem;
    color: #777;
    padding-right: 1rem;
}

.summary-single h5 {
    color: var(--main-color);
    font-size: 1.1rem;
    margin-bottom: 0rem !important;
}

.summary-single small {
    font-weight: 700;
    color: var(--text-grey);
}

.bday-flex {
    display: flex;
    align-items: center;
    margin-bottom: 0.3rem;
}

.bday-card {
    padding: 1rem;
}

.bday-img {
    height: 60px;
    width: 60px;
    border-radius: 50%;
    border: 3px solid #efefef;
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url(img/3.jpeg);
    margin-right: 0.7rem;
}

.text-center {
    text-align: center;
}

.text-center button {
    background: var(--main-color);
    color: #fff;
    border: 1px solid var(--main-color);
    border-radius: 4px;
    padding: 0.4rem 1rem;
}

@media only screen and (max-width: 1200px) {
    .sidebar {
        width: 60px;
        z-index: 150;
    }

    .sidebar .sidebar-header h3 span,
    .sidebar li span:last-child {
        display: none;
    }

    .sidebar .sidebar-header,
    .sidebar li {
        display: flex;
        justify-content: center;
    }

    .main-content {
        margin-left: 60px;
    }

    .main-content header {
        left: 60px;
        width: calc(100% - 60px);
    }

    #sidebar-toggle:checked ~ .sidebar {
        width: 240px;
    }

    #sidebar-toggle:checked ~ .sidebar .sidebar-header h3 span,
    #sidebar-toggle:checked ~ .sidebar li span:last-child {
        display: inline;
    }

    #sidebar-toggle:checked ~ .sidebar .sidebar-header {
        display: flex;
        justify-content: space-between;
    }

    #sidebar-toggle:checked ~ .sidebar li {
        display: block;
    }

    #sidebar-toggle:checked ~ .main-content {
        margin-left: 60px;
    }

    #sidebar-toggle:checked ~ .main-content header {
        left: 60px;
    }
}

@media only screen and (max-width: 860px) {
    .dash-cards {
        grid-template-columns: repeat(2, 1fr);
    }

    .card-single {
        margin-bottom: 1rem;
    }

    .activity-grid {
        display: block;
    }

    .summary {
        margin-top: 1.5rem;
    }
}

@media only screen and (max-width: 600px) {
    .dash-cards {
        grid-template-columns: 100%;
    }
}

@media only screen and (max-width: 450px) {
    main {
        padding-left: 1rem;
        padding-right: 1rem;
    }
}
<a class="inner" href="./home/projects/inspiration/'+filteredArray[i].id+'/add?image_url='+encodeURIComponent(filteredArray[i].urls.small)+'">click</a>



/**********************************************Sec six
<div class="secSixMo mobileVisibility">
	<div class="secSixContainerTwoMo">
		<h2>All Design Templates</h2>
	</div>
	<div class="secSixContainerMo">
		<div class="secSixIconMo">Member 1</div>
		<div class="secSixIconMo">Member 2</div>
	</div>
	<div class="secSixContainerMo">
		<div class="secSixIconMo">Member 3</div>
		<div class="secSixIconMo">Member 4</div>
	</div>
	<div class="secSixContainerMo">
		<div class="secSixIconMo">Member 5</div>
		<div class="secSixIconMo">Member 6</div>
	</div>
	<div class="secSixContainerMo">
		<div class="secSixIconMo">Member 7</div>
		<div class="secSixIconMo">Member 8</div>
	</div>
	<div class="secSixContainerMo">
		<div class="secSixIconMo">Member 9</div>
		<div class="secSixIconMo">Member 10</div>
	</div>
</div>

/*@media (min-width: 375px) {
    .secSixMo {
        padding-bottom: 80px;
        padding-top: 80px;
        background-color: #e5e5e5;

        .secSixContainerMo {
            display: flex;
            justify-content: space-around;
            width: 80%;
            margin: auto;
            //background-color: rgb(99, 99, 136);
            .secSixIconMo {
                background: rgb(173, 169, 169);
                margin: 10px;
                width: 200px;
                height: 200px;
            }
        }
        .secSixContainerTwoMo {
            width: 80%;
            margin: auto;
            background-color: rgb(99, 99, 136);
        }
    }
    /*.mobileVisibility {
        display: block;
    }*/
}

@media (min-width: 768px) {
    .secSix {
        padding-bottom: 80px;
        padding-top: 80px;
        background-color: #e5e5e5;
        /*&.desktopVisibility {
            display: visible;
        }*/
        .secSixContainer {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 80%;
            margin: auto;
            //background-color: rgb(99, 99, 136);
            .secSixIcon {
                background-repeat: no-repeat;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                text-align: center;

                border-radius: 2px;
                margin: 10px;
                width: 310px;
                height: 300px;
                position: relative;
                .secSixIconTwo {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 310px;
                    height: 300px;
                    .inner {
                        position: relative;
                        top: 80px;
                        visibility: hidden;
                        a {
                            color: #93c170 !important;
                            font-family: "Baloo Tammudu 2", cursive;
                            text-decoration: none;
                            font-size: 25px;
                        }
                    }
                }
                .secSixIconTwo:hover {
                    background-color: #1a1e25d0;
                    transition-duration: 300ms;
                    .inner {
                        visibility: visible;
                    }
                }
            }
        }
    }*/

===============================================================================
    <nav class="navbarCustom" id="navsticky">
<div class="navbar-navCustom navContainer">
	<div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
								<li class="navbar-nav-item">
         							<a class="navbar-nav-link" href="#search"><span>01.</span> SEARCH</a>
        						</li>
								<li class="navbar-nav-item">
          							<a class="navbar-nav-link" href="#about"><span>02.</span> ABOUT</a>
        						</li>
                                <li class="navbar-nav-item">
                                    <a class="navbar-nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="navbar-nav-item">
                                    <a class="navbar-nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
							<li class="navbar-nav-item">
         							<a class="navbar-nav-link" href="#search"><span>01.</span> SEARCH</a>
        						</li>
								<li class="navbar-nav-item">
          							<a class="navbar-nav-link" href="#about"><span>02.</span> ABOUT</a>
        						</li>
                            <li class="navbar-nav-item dropdown">
                                <a id="navbarDropdown" class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
</nav>

/***************************** Edit User 
<!--<form action="../{{$user->id}}" method="POST">
@method('PUT')
@csrf
  <div class="form-group row">
        <div class="col-sm-6">
            <label for="title">Name</label>
            <input class="form-control" type="text" name="name" value="{{$user->name}}">
        </div>
        <div class="col-sm-6">
        </div>
  </div>

  <div class="form-group row">
        <div class="col-sm-6">
            <label for="email">email</label>
            <input class="form-control" type="text" name="email" value="{{$user->email}}">
        </div>
        <div class="col-sm-6">
        </div>
  </div>

  <div class="form-group row">
        <div class="col-sm-6">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password">
        </div>
        <div class="col-sm-6">
        </div>
    </div>
<button type="submit" class="btn btn-primary">Save Change</button>
</form>-->

<!--<form action="../{{$user->id}}" method="POST">
@method('PUT')
@csrf
<label for="title">Name</label>
<input type="text" name="name" value="{{$user->name}}">

<label for="email">email</label>
<input type="text" name="email" value="{{$user->email}}">

<label for="password">Password</label>
<input type="text" name="password">

<button type="submit">Save Change</button>
</form>-->


Original search
<div class="secSix" id="search" style="padding-top: 20px;">
	<div class="secSixTitle">
		<div class="secSixTitleContainer">
			<div class="secSixTitleMain">
                <h1 style="font-family: 'Staatliches', cursive; font-size:50px;"><strong>{{$project->title}}</strong></h1>
				<h4 style="color:#598be5; font-family: 'Baloo Tammudu 2', cursive;"><strong>Search your Ideas</strong></h4>
				<form action="./add/search" method="post" id="searchFrom">
					@csrf
					<input id="searchKey" class="searchSpace" name="searchTerm" type="text" value="" placeholder="Enter terms..." >
					<button name="submit" type="submit" class="searchButton">Search</button>
				</form>
			</div>
		</div>
	</div>
</div>

Oiginal Search Javascript
<!--<div class="secSixContainer" id="image">
		<script>
        		/*const request = new XMLHttpRequest();
        		request.open("GET", "https://api.unsplash.com/search/photos?query=book&client_id=nabzPMEXICvZkH7xLxrpL5ieXswIVH4nfHFIxfQQOlk", true); //asyn or not
				request.onload = function () {
				data = JSON.parse(this.responseText);
				var filteredArray = [];
				data.results.forEach(x => filteredArray.push(x));
				var output = '';
				for(var i in filteredArray){
					output += '<div class="secSixIcon" style="background: url('+filteredArray[i].urls.small+');">'+ 
					'<div class="secSixIconTwo"><div class="inner"><a href="./home/projects/inspiration/'+filteredArray[i].id+'/add?image_url='+encodeURIComponent(filteredArray[i].urls.small)+'&description='+filteredArray[i].description+'">Add Template</a></div></div></div>';
				}
				document.getElementById('image').innerHTML = output;
        		};
        		request.send();*/

			document.getElementById("searchFrom").addEventListener("submit", getName);
			var data;
      		function getName(e) {	
        		e.preventDefault();
        		var searchKey = document.getElementById("searchKey").value;
        		const request = new XMLHttpRequest();
        		request.open("GET", "https://api.unsplash.com/search/photos?query="+searchKey+"&client_id=nabzPMEXICvZkH7xLxrpL5ieXswIVH4nfHFIxfQQOlk", true); //asyn or not
				request.onload = function () {
				data = JSON.parse(this.responseText);
				var filteredArray = [];
				data.results.forEach(x => filteredArray.push(x));
				var output = '';
				for(var i in filteredArray){
					output += '<div class="secSixIcon" style="background: url('+filteredArray[i].urls.small+');">'+ 
					'<div class="secSixIconTwo"><div class="inner"><a href="./home/projects/inspiration/'+filteredArray[i].id+
					'/add?image_url='+encodeURIComponent(filteredArray[i].urls.small)+'&description='+filteredArray[i].description+'&project_id='+$project">Add Template</a></div></div></div>';
				}
				document.getElementById('image').innerHTML = output;
        		};
        		request.send();
      			}

		</script>
	</div>-->


    <div class="secThreeIcon" style="background:url('{{$inspiration->image_url}}');"></div>
            <div class="card-body">
                <h5 class="card-title">{{$inspiration->description}}</h5>
                <p class="card-text">Some quick example text to.</p>
                <td><button type="button" class="btn btn-danger"><a style="color:white; text-decoration:none;" href="./{{$project->id}}/inspiration/{{$inspiration->image_info}}/delete">Delete</a></button></td>
            </div>