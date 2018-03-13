@extends('app')
@section('title','Kapcsolat')

@section('body')
	<div class='aldiv bg-danger p-5'>
		<h1 class='text-white'>Kapcsolat</h1>
	</div>
	<div class='row'>
		<div class='col-8 p-5'>
			<h3>Üzenj nekünk</h3>
			{{Form::open(array('action'=>'FormController@contactForm', 'class'=>'form form-group'))}}
			<div class='row my-3 pl-3'>
				{{Form::text('name', '', ['class'=>'form-control col-6', 'required'=>'required', 'placeholder'=>'Név'])}}
			</div>
			<div class='row my-3 pl-3'>
				{{Form::email('email', '', ['class'=>'form-control col-6', 'required'=>'required', 'placeholder'=>'Email cím'])}}
			</div>
			<div class='row my-3 pl-3'>
				{{Form::text('phone', '', ['class'=>'form-control col-6', 'placeholder'=>'Telefonszám (opcionális)'])}}
			</div>
			<div class='row my-3 pl-3'>
				{{Form::textarea('message', '', ['class'=>'form-control col-12', 'required'=>'required', 'rows'=>'8', 'placeholder'=>'Üzenet'])}}
			</div>
			{{Form::submit('Üzenet küldése', ['class'=>'btn btn-secondary'])}}
			{{Form::close()}}
		</div>
		<div class='col-4 p-5'>
			<h4>Táborvezetők</h4>
			<table class='table'>
				<tbody>
					<tr><td>Bódi László</td><td>+36 70/360-6119</td></tr>
					<tr><td>Makkai Ferenc</td><td>+36 20/968-7481</td></tr>
					<tr><td>Szabados Márk</td><td>+36 70/397-1283</td></tr>
					<tr><td>Turóczi Gábor</td><td>+36 70/277-6742</td></tr>
				</tbody>
			</table>
			<h4 class='mt-3'>Adminisztráció</h4>
			<table class='table'>
				<tbody>
					<tr><td>Email</td><td>tekeresitabor@gmail.com</td></tr>
					<tr><td>Telefon</td><td>+36 20/555-5555</td></tr>
				</tbody>
			</table>
			<table class='align-middle inline'>
				<td><a href='https://www.facebook.com/tekeresitabor/' target='_blank'>
					<i class='fa fa-facebook-square fa-3x text-primary' ></i>
				</a></td>
				<td><h6 class='my-auto pl-3'>Kövess minket a Facebookon!</h6></td>
			</table>
		</div>
	</div>
@endsection
