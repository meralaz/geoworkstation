@extends('site.layouts.entrance')
{{-- Web site Title --}}
@section('title')
:: {{{ Lang::get('site.contact_us') }}} 
@parent
@stop

{{-- Company Name --}}
@section('company')
	<div id="company" class="company">GeoWorkStation</div>
	<div id="companyMotto" class="companyMotto">
		Geospatial Excellence
		<ul class="serviceList">
			Preparing DEM, Contours and Maps
		</ul>
	</div>
@stop

{{-- Content --}}
@section('content')
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
		<li data-target="#carousel-example-generic" data-slide-to="4"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<div class="item active">
		  <img src="images/img1.jpg" alt="Satellite Imagery 1">
		  <div class="carousel-caption carousel-custom-bg">
			Satellite Imagery 10
			More Caption Satellite Imagery 1</br>

		  </div>
		</div>
		
		<div class="item">
		  <img src="images/img2.jpg" alt="Satellite Imagery 2">
		  <div class="carousel-custom-bg carousel-caption">
			Satellite Imagery 2
			More Caption Satellite Imagery 1</br>
		  </div>
		</div>
		
		<div class="item">
		  <img src="images/img3.jpg" alt="Satellite Imagery 2">
		  <div class="carousel-custom-bg carousel-caption">
			Satellite Imagery 3
			More Caption Satellite Imagery 1</br>

		  </div>
		</div>
		
		<div class="item">
		  <img src="images/img4.jpg" alt="Satellite Imagery 2">
		  <div class="carousel-custom-bg carousel-caption">
			Satellite Imagery 4
			More Caption Satellite Imagery 1</br>
		  </div>
		</div>
		
		<div class="item">
		  <img src="images/img5.jpg" alt="Satellite Imagery 2">
		  <div class="carousel-custom-bg carousel-caption">
			Satellite Imagery 5
			More Caption Satellite Imagery 1</br>
		  </div>
		</div>
		

		
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div> 

@stop

{{-- Footer --}}
@section('footer')

{{{ Lang::get('site.gws_slogan') }}}

@stop