@extends('layouts.app')
@section('content')

<nav class="navbarCustom" id="navsticky">
<div class="navbar-navCustom">
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
         							<a class="navbar-nav-link" href="#search"><span>01.</span> DEMO</a>
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
         							<a class="navbar-nav-link" href="#search"><span>01.</span> DEMO</a>
        						</li>
								<li class="navbar-nav-item">
          							<a class="navbar-nav-link" href="#about"><span>02.</span> ABOUT</a>
        						</li>
								<li class="navbar-nav-item">
								<a class="navbar-nav-link" href="./home" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Dashboard
                                </a>
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

<!--Jumbotron-->
<div class="jumbotronCustom">
	<div class="featuredContent">
		<img src="images/catalogTwo.jpg">
		<!--<div class="imgOne"></div>-->
		<div class="featuredContentBg"></div>
		<div class="mainTitle">
			<h1><strong>Catalog Design Inspiration</strong></h1>
  			<h1><strong>Create without limit</strong></h1>
  			<h3><i>500+ Graphic Resources</i></h3>
			<h4 class="buttonOne">Schedule a Free Consultation</h4>
		</div>
	</div>
<div>
	
<!--START Section 1-->
<div class="secOne">
	<div class="secOneContainer">
		<div class="secOneIconOne">
			<span style="color: dodgerblue;"><i class="fas fa-print fa-2x"></i></span>
			<h3 style="margin-top:12px;">Product Catalog</h3>
			<p>Making a catalog with us is both easy and simple but most importantly is practical.
			And there’s more! We have also organized all these catalog templates by categories and themes, so you’ll find them rapidly. 
			Everything is super easy with us!</p>
		</div>
		<div class="secOneIconTwo">
			<span style="color: Tomato;"><i class="fas fa-book-open fa-2x"></i></span>
			<h3 style="margin-top:12px;">Digital Magazine</h3>
			<p>And the best is yet to come! We give you the opportunity to fully customize the entire catalog templates. 
			Once you’ve chosen an online catalog design, it’s really child’s play to edit it using our user-friendly interface.</p>
		</div>
		<div class="secOneIconThree">
			<span style="color: Mediumslateblue;"><i class="fas fa-newspaper fa-2x"></i></span>
			<h3 style="margin-top:12px;">Brochure Design</h3>
			<p>Feel free to choose from our stunning and professional stock photos and images and also modify the text, 
			fonts and the colors. If you still can’t find anything suitable for your needs, you can also upload your own images, 
			icons and fonts.</p>
		</div>
	</div>
</div>

<!--START Section 6-->
<div class="secSix" id="search">
	<div class="secSixTitle">
		<div class="secSixTitleContainer">
			<div class="secSixTitleMain">
				<h1 style="font-family: 'Staatliches', cursive; font-size:50px;"><strong>USE BELOW LOGIN FOR DEMO</strong></h1>
				<hr>
		
				<h6 style="color:#598be5; font-family: 'Baloo Tammudu 2', cursive;"><i><strong>Login:</strong> admin@gmail.com</i></h6>
				<h6 style="color:#598be5; font-family: 'Baloo Tammudu 2', cursive;"><i><strong>Password:</strong> admin123456</i></h6>
				<button type="button" class="btn btn-primary"><a style="color:white; text-decoration:none;" href="{{ route('login') }}">{{ __('Login') }}</a></button>

				<!--<form action="" method="post" id="searchFrom">
					@csrf
					<input id="searchKey" class="searchSpace" name="searchTerm" type="text" value="" placeholder="Enter terms..." >
					<button name="submit" type="submit" class="searchButton">Search</button>-->
				</form>
			</div>
		</div>
	</div>
</div>

<!--START Section 2-->
<div class='secTwo' id="about">
	<div class="container">
		<div class="row secTwoAbout" style="text-align:center;">
			<div class="col-md-12">
				<h2 style="font-family: 'Staatliches', cursive; font-size:50px;"><strong>About Us</strong></h2>
				<hr>
				<h5 style="color:#598be5; font-family: 'Baloo Tammudu 2', cursive;"><i>To create a well-organized catalog take a look at our catalog</i></h5>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h3 class="page-header"><strong>Why People Choose Us</strong></h3>
				<p style="margin-top:20px;">To create a well-organized catalog take a look at our catalog templates or design your own catalog from scratch.It’s said that is crucial to have an informative and attractive 
				catalog if you want to showcase your business. No matter if it’s a fashion catalog, a product catalog or a business catalog, if it’s well designed, it could really reinforce your
				brand awareness.Don’t worry, we’ve already answered this question for you when we decided to create a variety of free catalog templates that will fit your needs! Flipsnack is always 
				at your disposal when you’re looking for catalog design ideas.</p>
				<p style="margin-top:20px;">To create a well-organized catalog take a look at our catalog templates or design your own catalog from scratch.It’s said that is crucial to have an informative and attractive 
				catalog if you want to showcase your business. No matter if it’s a fashion catalog.</p>
				<button type="button" class="btn btn-outline-primary">Learn More</button>
			</div>
			<div class="col-md-6" style="padding-top:10px;">
			<img src="images/magazineOne.jpg" width="100%">
			</div>
		</div>
	</div>
</div>

<!--Footer-->
 <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Catalog design</a></li>
                            <li><a href="#">Print Brokers</a></li>
                            <li><a href="#">Logo Design Services</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Locations</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>CatchonDesign</h3>
                        <p>Create a professional business card with our online design tool. We have hundreds of print-ready templates in a variety of styles and layouts, including designs for popular industries like real estate.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="fab fa-facebook-f"></i></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-snapchat-ghost"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                </div>
                <p class="copyright">CatchonDesign © 2021</p>
            </div>
        </footer>
    </div>
@endsection

