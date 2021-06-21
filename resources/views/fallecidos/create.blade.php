@extends('layouts.app')

@section('content')

<h1>NUEVO TITUTAR</h1>

<div class="container mx-auto my-8">

	<form action="{{ route('titulars.store') }}" method="POST">
		@csrf
		<div class="container grid grid-cols-2 w-1/2 gap-4">
			<label class="text-xl font-bold">Nombre</label>
			<div>
				<input class="rounded w-full" type="text" name="nombre"/>
				
			</div>
			
			<label class="text-xl font-bold">Primer Apellido</label>
			<div>
			<input class="rounded w-full" type="text" name="primer_apellido"/>
			
			</div>
			
			<label class="text-xl font-bold">Segundo Apellido</label>
			<div>
				<input class="rounded w-full" type="text" name="segundo_apellido"/>
				
			</div>
			
			
		</div>
		<div class="pt-8">
			<input class="btn-primary" type="submit" name="guardar" value="Guardar"/>
			<a class="text-gray-500 ml-4" href="{{ route('titulars.index') }}">Cancelar</a>
		</div>
	</form>
</div>
@endsection