@extends('layout')
@section('content')
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Banner
================================================== -->
					
						


<form method="post" action="/list">
{{ csrf_field() }}
	<div class="main-search-container dark-overlay">
	<div class="main-search-inner">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Encontre seu roteiro</h2>
					<h4>COMECE SUA PRÓXIMA AVENTURA COM A BE-NOMAD</h4>

					<div class="main-search-input">

						<div class="main-search-input-item">
	
							<input type="date" name="date_search" placeholder="Quando voce quer ir ?" value=""/>
						</div>

						<div class="main-search-input-item location">
							<div id="autocomplete-container">
								<input   name="location_search" id="autocomplete-input" type="text" placeholder="Onde voce quer ir?">
							</div>
							<a href="#"><i class="fa fa-map-marker"></i></a>
						</div>
						
						<div class="main-search-input-item">
							<select data-placeholder="Todas as categorias" class="chosen-select" name="category_list">
								<option>Todas as categorias</option>	
								<option>Trilha</option>
								<option>Mergulho</option>
								<option>Passseio de Barco</option>
								<option>Ecoturismo</option>
								<option>Surf</option>
							</select>
						</div>

						<button class="button" type="submit">Procurar</button>
					</div>
				</div>
			</div>
		</div>

	</div>
								</form>	
	<!-- Video -->
	<div class="video-container">
		<video poster="images/pexels-photo-769158.jpeg" loop autoplay muted>
			<source src="images/pexels-photo-769158.jpeg" type="video/mp4">
		</video>
	</div>

</div>



<!-- Content
================================================== -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-top-75">
				Browse Categories
			</h3>
		</div>

	</div>
</div>


<!-- Category Boxes -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="categories-boxes-container margin-top-5 margin-bottom-30">
				
				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box">
					<i class="im im-icon-Hamburger"></i>
					<h4>Eat & Drink</h4>
				</a>

				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box">
					<i class="im  im-icon-Sleeping"></i>
					<h4>Hotels</h4>
				</a>

				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box">
					<i class="im im-icon-Shopping-Bag"></i>
					<h4>Shops</h4>
				</a>

				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box">
					<i class="im im-icon-Cocktail"></i>
					<h4>Nightlife</h4>
				</a>

				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box">
					<i class="im im-icon-Electric-Guitar"></i>
					<h4>Events</h4>
				</a>

				<!-- Box -->
				<a href="listings-list-with-sidebar.html" class="category-small-box">
					<i class="im im-icon-Dumbbell"></i>
					<h4>Fitness</h4>
				</a>

			</div>
		</div>
	</div>
</div>
<!-- Category Boxes / End -->


<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
					Most Visited Places
					<span>Discover top-rated local businesses</span>
				</h3>
			</div>
		</div>
	</div>

	<!-- Carousel / Start -->
	<div class="simple-fw-slick-carousel dots-nav">

		@foreach ($destinations as $destination)

		<!-- Listing Item -->
		<div class="fw-carousel-item">
			<a href="listings-single-page.html" class="listing-item-container compact">
				<div class="listing-item">
					<img src="images/listing-item-01.jpg" alt="">

					<div class="listing-badge now-open">Now Open..</div>

					<div class="listing-item-content">
						<div class="numerical-rating" data-rating="3.5"></div>
						<h3>{{ $destination->destination_name }}</h3>
						<span>{{ $destination->address }}</span>
					</div>
					<span class="like-icon"></span>
				</div>
			</a>
		</div>
		<!-- Listing Item / End -->

	    @endforeach 

	</div>
	<!-- Carousel / End -->


</section>
<!-- Fullwidth Section / End -->


<!-- Container -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-bottom-35 margin-top-70">Popular Cities <span>Browse listings in popular places</span></h3>
		</div>
		
		<div class="col-md-4">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-01.jpg">
				<div class="img-box-content visible">
					<h4>New York </h4>
					<span>14 Listings</span>
				</div>
			</a>

		</div>	
			
		<div class="col-md-8">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-02.jpg">
				<div class="img-box-content visible">
					<h4>Los Angeles</h4>
					<span>24 Listings</span>
				</div>
			</a>

		</div>	

		<div class="col-md-8">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-03.jpg">
				<div class="img-box-content visible">
					<h4>San Francisco </h4>
					<span>12 Listings</span>
				</div>
			</a>

		</div>	
			
		<div class="col-md-4">

			<!-- Image Box -->
			<a href="listings-list-with-sidebar.html" class="img-box" data-background-image="images/popular-location-04.jpg">
				<div class="img-box-content visible">
					<h4>Miami</h4>
					<span>9 Listings</span>
				</div>
			</a>

		</div>

	</div>
</div>
<!-- Container / End -->


<!-- Flip banner -->
<a href="listings-half-screen-map-list.html" class="flip-banner parallax margin-top-65" data-background="images/slider-bg-02.jpg" data-color="#f91942" data-color-opacity="0.85" data-img-width="2500" data-img-height="1666">
	<div class="flip-banner-content">
		<h2 class="flip-visible">Expolore top-rated attractions nearby</h2>
		<h2 class="flip-hidden">Browse Listings <i class="sl sl-icon-arrow-right"></i></h2>
	</div>
</a>
<!-- Flip banner / End -->
@endsection