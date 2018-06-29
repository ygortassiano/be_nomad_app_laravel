<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Be-Nomad</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" href="images/logo_size_icon.jpg" type="image/gif" sizes="16x16">


<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>

<body>
<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="/"><img src="{{ asset('images/logo.jpg') }}" alt=""></a>
				</div>
				

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li><a class="current" href="/">Home</a>
							
						</li>

						<li><a href="#">Roteiros</a>
							<ul>
								<li><a href="#">Passeio de Barco</a>
									<ul>
										<li><a href="listings-list-with-sidebar.html">Passeio</a></li>
										<li><a href="listings-list-full-width.html">Full Width</a></li>
										<li><a href="listings-list-full-width-with-map.html">Full Width + Map</a></li>
									</ul>
								</li>
								<li><a href="#">Mergulho</a>
									<ul>
										<li><a href="listings-grid-with-sidebar-1.html">With Sidebar 1</a></li>
										<li><a href="listings-grid-with-sidebar-2.html">With Sidebar 2</a></li>
										<li><a href="listings-grid-full-width.html">Full Width</a></li>
										<li><a href="listings-grid-full-width-with-map.html">Full Width + Map</a></li>
									</ul>
								</li>
								<li><a href="#">Trilhas</a>
									<ul>
										<li><a href="listings-half-screen-map-list.html">List Layout</a></li>
										<li><a href="listings-half-screen-map-grid-1.html">Grid Layout 1</a></li>
										<li><a href="listings-half-screen-map-grid-2.html">Grid Layout 2</a></li>
									</ul>
								</li>
								<li><a href="listings-single-page.html">Esportes</a></li>
							</ul>
						</li>

						<li><a href="#">Dashboard</a>
							<ul>
								<li><a href="dashboard.html">Dashboard</a></li>
								<li><a href="dashboard-messages.html">Messages</a></li>
								<li><a href="dashboard-bookings.html">Bookings</a></li>
								<li><a href="dashboard-my-listings.html">My Listings</a></li>
								<li><a href="dashboard-reviews.html">Reviews</a></li>
								<li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
								<li><a href="dashboard-add-listing.html">Add Listing</a></li>
								<li><a href="dashboard-my-profile.html">My Profile</a></li>
								<li><a href="dashboard-invoice.html">Invoice</a></li>
							</ul>
						</li>
						<li><a href="#">Seja um parceiro</a>
						</li>
						<!--
						<li><a href="#">Pages</a>
							<div class="mega-menu mobile-styles three-columns">

									<div class="mega-menu-section">
										<ul>
											<li class="mega-menu-headline">Pages #1</li>
											<li><a href="pages-user-profile.html"><i class="sl sl-icon-user"></i> User Profile</a></li>
											<li><a href="pages-booking.html"><i class="sl sl-icon-check"></i> Booking Page</a></li>
											<li><a href="pages-add-listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
											<li><a href="pages-blog.html"><i class="sl sl-icon-docs"></i> Blog</a></li>
										</ul>
									</div>
		
									<div class="mega-menu-section">
										<ul>
											<li class="mega-menu-headline">Pages #2</li>
											<li><a href="pages-contact.html"><i class="sl sl-icon-envelope-open"></i> Contact</a></li>
											<li><a href="pages-coming-soon.html"><i class="sl sl-icon-hourglass"></i> Coming Soon</a></li>
											<li><a href="pages-404.html"><i class="sl sl-icon-close"></i> 404 Page</a></li>
											<li><a href="pages-masonry-filtering.html"><i class="sl sl-icon-equalizer"></i> Masonry Filtering</a></li>
										</ul>
									</div>

									<div class="mega-menu-section">
										<ul>
											<li class="mega-menu-headline">Other</li>
											<li><a href="pages-elements.html"><i class="sl sl-icon-settings"></i> Elements</a></li>
											<li><a href="pages-pricing-tables.html"><i class="sl sl-icon-tag"></i> Pricing Tables</a></li>
											<li><a href="pages-typography.html"><i class="sl sl-icon-pencil"></i> Typography</a></li>
											<li><a href="pages-icons.html"><i class="sl sl-icon-diamond"></i> Icons</a></li>
										</ul>
									</div>
									
							</div>
						</li>
						-->
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

            
			<!-- Right Side Content / End -->
			@guest
            <div class="right-side">
				<div class="header-widget">
					<a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> {{ __('Login') }}</a>
					
					<!-- <a href="dashboard-add-listing.html" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a> -->
				</div>
			</div>
			
            @else
            <div class="right-side">
				<div class="header-widget">
						<a href="/" class="sign-in"><i class="sl sl-icon-user"></i> {{ Auth::user()->name }}</a>
						
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
						
					<!-- <a href="dashboard-add-listing.html" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a> -->
				</div>
            </div>
            @endguest
			<!-- Right Side Content / End -->

			<!-- Sign In Popup -->
			<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
                @if (session('status'))
                <div class="small-dialog-header">
					<h3>Sign In</h3>
                </div>
                @else 
				<div class="small-dialog-header">
					<h3>Login</h3>
				</div>
                
				<!--Tabs -->
				<div class="sign-in-form style-1">

					<ul class="tabs-nav">
						<li class=""><a href="#tab1">Log In</a></li>
						<li><a href="#tab2">Register</a></li>
					</ul>

					<div class="tabs-container alt">
                    
						<!-- Login -->
						<div class="tab-content" id="tab1" style="display: none;">
							<form method="post" class="login" action="{{ route('login') }}">
							@csrf
								<p class="form-row form-row-wide">
									<label for="username">{{ __('E-Mail Address') }}:
										<i class="im im-icon-Male"></i>
										<input type="email" class="input-text" name="email" id="email" value="{{ old('email') }}" required/>
										@if ($errors->has('email'))
                                   		<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
									</label>
								</p>

								<p class="form-row form-row-wide">
									<label for="password">{{ __('Password') }}:
										<i class="im im-icon-Lock-2"></i>
										<input class="input-text" type="password" name="password" id="password" required/>
										@if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                	@endif
									</label>


									<span class="lost_password">
										<a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}?</a>
									</span>
								</p>

								<div class="form-row">
									<input type="submit" class="button border margin-top-5" name="login" value="Login" />
									<div class="checkboxes margin-top-10">
										<input id="remember-me" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
										<label for="remember-me">{{ __('Remember Me') }}</label>
									</div>
								</div>
								
							</form>
						</div>






						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">

							<form method="post" class="register" action="{{ route('register') }}">
							@csrf	
							<p class="form-row form-row-wide">
								<label for="username2">{{ __('Name') }}:
									<i class="im im-icon-Male"></i>
									<input type="text" class="input-text" name="name" id="username2" value="{{ old('name') }}" />
									@if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                	@endif
								</label>
							</p>
								
							<p class="form-row form-row-wide">
								<label for="email2">{{ __('E-Mail Address') }}:
									<i class="im im-icon-Mail"></i>
									<input type="email" class="input-text" name="email" id="email2" value="{{ old('email') }}" />@if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                	@endif
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password1">{{ __('Password') }}:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password" id="password1"/>
									@if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                               		 @endif
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password2">{{ __('Confirm Password') }}:
									<i class="im im-icon-Lock-2"></i>
									<input class="input-text" type="password" name="password_confirmation" id="password2"/>
								</label>
							</p>
                   
							

							<input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
	
							</form>
						</div>

					</div>
				</div>
            </div>
            @endif
            
			<!-- Sign In Popup / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>

<!--extends('headers.user_header')-->
@yield('content')
@yield('content_mid')
@yield('content_bot')

<!-- Footer
================================================== -->
<div id="footer">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="images/logo.png" alt="">
				<br><br>
				<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			</div>

			<div class="col-md-4 col-sm-6 ">
				<h4>Helpful Links</h4>
				<ul class="footer-links">
					<li><a href="#">Login</a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Add Listing</a></li>
					<li><a href="#">Pricing</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>

				<ul class="footer-links">
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Our Partners</a></li>
					<li><a href="#">How It Works</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>		

			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>12345 Little Lonsdale St, Melbourne</span> <br>
					Phone: <span>(123) 123-456 </span><br>
					E-Mail:<span> <a href="#">office@example.com</a> </span><br>
				</div>

				<ul class="social-icons margin-top-20">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
				</ul>

			</div>

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->



<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{ asset('scripts/jquery-2.2.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/mmenu.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/chosen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/rangeslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/tooltips.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/custom.js') }}"></script>

<!-- Google Autocomplete -->
<script>
  function initAutocomplete() {
    var input = document.getElementById('autocomplete-input');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        window.alert("No details available for input: '" + place.name + "'");
        return;
      }
    });

	if ($('.main-search-input-item')[0]) {
	    setTimeout(function(){ 
	        $(".pac-container").prependTo("#autocomplete-container");
	    }, 300);
	}
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete') }}"></script>

<!-- Style Switcher
================================================== -->
<script src="{{ asset('scripts/switcher.js') }}"></script>

<div id="style-switcher">
	
	<div>
		<ul class="colors" id="color1">
			<li><a href="#" class="main" title="Main"></a></li>
			<li><a href="#" class="blue" title="Blue"></a></li>
			<li><a href="#" class="green" title="Green"></a></li>
			<li><a href="#" class="orange" title="Orange"></a></li>
			<li><a href="#" class="navy" title="Navy"></a></li>
			<li><a href="#" class="yellow" title="Yellow"></a></li>
			<li><a href="#" class="peach" title="Peach"></a></li>
			<li><a href="#" class="beige" title="Beige"></a></li>
			<li><a href="#" class="purple" title="Purple"></a></li>
			<li><a href="#" class="celadon" title="Celadon"></a></li>
			<li><a href="#" class="red" title="Red"></a></li>
			<li><a href="#" class="brown" title="Brown"></a></li>
			<li><a href="#" class="cherry" title="Cherry"></a></li>
			<li><a href="#" class="cyan" title="Cyan"></a></li>
			<li><a href="#" class="gray" title="Gray"></a></li>
			<li><a href="#" class="olive" title="Olive"></a></li>
		</ul>
	</div>
		
</div>
<!-- Style Switcher / End -->


</body>
</html>