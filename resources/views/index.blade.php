@extends('app')
@section('title','Gyermektábor')


@section('body')
	<div id="carousel" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner" role="listbox">
	    @foreach($slider as $picture)
		    <div class="carousel-item">
		      {{ HTML::image(asset('slider/'.$picture->getBaseName()), '',['class'=> "d-block img-fluid h-50 w-100", 'data-interval'=>"500"]) }}
		    </div>
	    @endforeach
	  </div>
	</div>
	<div id='infodivs' class='container'>
		<div class='row text-center mt-5 mb-5'>
			<div class='col-3'>
				<a href='taborok' class='text-dark'>
					<div class='text-center'>
						<span class="fa-stack fa-3x">
						  <i class="fa fa-circle-thin fa-stack-2x"></i>
						  <i class="fa fa-child fa-stack-1x"></i>
						</span>
					</div>
					<div class='h4'>
						Táborok
					</div>
					<div>
						A táborok beosztása.
					</div>
				</a>
			</div>
			<div class='col-3'>
				<a href='#' class='text-dark'>
					<div class='text-center'>
						<span class="fa-stack fa-3x">
						  <i class="fa fa-circle-thin fa-stack-2x"></i>
						  <i class="fa fa-pencil fa-stack-1x"></i>
						</span>
					</div>
					<div class='h4'>
						Jelentkezés
					</div>
					<div>
						Ide kattintva jelentkezhetsz a táborokba.
						A jelentkezés indul: 2018. április 28.
					</div>
				</a>
			</div>
			<div class='col-3'>
				<a href='#' class='text-dark'>
					<div class='text-center'>
						<span class="fa-stack fa-3x">
						  <i class="fa fa-circle-thin fa-stack-2x"></i>
						  <i class="fa fa-question fa-stack-1x"></i>
						</span>
					</div>
					<div class='h4'>
						Tudnivalók
					</div>
				</a>
			</div>
			<a href='kapcsolat' class='text-dark'>
				<div class='col-3'>
					<div class='text-center'>
						<span class="fa-stack fa-3x">
						  <i class="fa fa-circle-thin fa-stack-2x"></i>
						  <i class="fa fa-address-book fa-stack-1x"></i>
						</span>
					</div>
					<div class='h4'>
						Kapcsolat
					</div>
					<div>

					</div>
				</div>
			</a>
		</div>
	</div>
	{{--HORIZONTAL TIMELINE A TÁBOROKKAL???--}}
	<div id='taborok'>
		
	</div>
	<div id='kivi' class='row bg-warning image-div'>
		<div class="col-6 my-auto text-center p-0">
			<h2>KIVItelezők</h2>
			<br>Ismerd meg a kiviket!</br>
		</div>
		<div class="col-6 container p-0">
			{{HTML::image(asset('pictures/kiwi.jpg'), '', ['class'=>'img-fluid h-100 w-100 mx-auto d-block'])}}
		</div>
	</div>
	<div id='said' class='bg-danger bg-faded p-5 '>
		<div class='text-center mx-auto'>
			<h2 class='text-white mb-5'>Rólunk mondtátok...</h2>
		</div>
		<div class='row justify-content-center'>
			<div class='bg-light col-2 p-3 text-center ml-3 mr-3'>
				{{HTML::image(asset('pictures/fb.jpg'), '', ['class'=>'rounded-circle w-75 m-0'])}}
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
			</div>
			<div class='bg-light col-2 p-3 text-center  ml-3 mr-3'>
				{{HTML::image(asset('pictures/fb.jpg'), '', ['class'=>'rounded-circle w-75 m-0'])}}
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
			</div>
			<div class='bg-light col-2 p-3 text-center  ml-3 mr-3'>
				{{HTML::image(asset('pictures/fb.jpg'), '', ['class'=>'rounded-circle w-75 m-0'])}}
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
			</div>
			<div class='bg-light col-2 p-3 text-center  ml-3 mr-3'>
				{{HTML::image(asset('pictures/fb.jpg'), '', ['class'=>'rounded-circle w-75 m-0'])}}
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
			</div>
		</div>
	</div>
	<div id='map' class='bg-dark row pt-5 pb-5 pl-5'>
		<div class="col-6 ">
			{{-- <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=als%C3%B3tekeresi%20ifj%C3%BAs%C3%A1gi%20t%C3%A1bor&key=AIzaSyARgAu5-dhREaU2qyCYVhjRVhP37VESh2E" allowfullscreen></iframe> --}}
		</div>
		<div class='col-6 text-white'>
			<h2 class="text-left text-white">Elérhetőség</h2>
			<ul class='list-unstyled'>
				<li>Enying-Alsótekeres</li>
				<li>Lomb utca 7.</li>
				<li>8130</li>
			</ul>
			<br>Megközelíthető</br>
			<ul class='list-unstyled'>
				<li>Autóval:</li>
				<li>Busszal:</li>
			</ul>
		</div>
	</div>
	<div class='text-center container bg-light'>
		<i class='fa fa-facebook-square fa-3x'></i>
	</div>
@endsection

<!-- AIzaSyARgAu5-dhREaU2qyCYVhjRVhP37VESh2E  --!>
