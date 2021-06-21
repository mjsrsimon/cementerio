@extends('layouts.app')

@section('content')

<h1>NUEVO TITUTAR</h1>

<div class="container mx-auto my-8">

	<form action="{{ route('fallecidos.store') }}" method="POST">
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
			
			
			<label class="text-xl font-bold">Situación</label>
			<div>
				<input class="rounded w-full" type="text" name="situacion"/>

			</div>
			

			<label class="text-xl font-bold">Fecha Sepelio</label>
			<div>
				<input class="rounded w-full" type="date" name="FechaSepelio"/>

			</div>
			<label class="text-xl font-bold">Observaciones</label>
			<div>
				<input class="rounded w-full" type="text" name="observaciones"/>

			</div>
			<label class="text-xl font-bold">Decreto</label>
			<div>
				<input class="rounded w-full" type="text" name="decreto"/>

			</div>
			<label class="text-xl font-bold">OS</label>
			<div>
				<input class="rounded w-full" type="text" name="OS"/>

			</div>

			
			
		</div>
		<div class="pt-8">
			<input class="btn-primary" type="submit" name="guardar" value="Guardar"/>
			<a class="text-gray-500 ml-4" href="{{ route('fallecidos.index') }}">Cancelar</a>
		</div>
	</form>
</div>
@endsection