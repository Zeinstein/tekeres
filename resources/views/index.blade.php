@extends('app')
@section('title','Index')


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
		<div class='row text-center mt-5'>
			<div class='col-3'>
				<div class='text-center'>
					<span class="fa-stack fa-3x">
					  <i class="fa fa-circle-thin fa-stack-2x"></i>
					  <i class="fa fa-pencil fa-stack-1x"></i>
					</span>
				</div>
				<div class='h4'>
					Táborok
				</div>
				<div>
					Ide kattintva jelentkezhetsz a táborokba.
					A jelentkezés indul: 2018. április 28.
				</div>
			</div>
			<div class='col-3'>
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
			</div>
			<div class='col-3'>
				third div
			</div>
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
		</div>
	</div>


	<div id='map'>

	</div>
@endsection
