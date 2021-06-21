@extends('layouts.app')

@section('content')

<h1>NUEVO NICHO</h1>

<div class="container mx-auto my-8">

	<form action="{{ route('nichos.store') }}" method="POST">
		@csrf
		<div class="container grid grid-cols-2 w-1/2 gap-4">
			<label class="text-xl font-bold">Numero</label>
			<div>
				<input class="rounded w-full" type="text" name="numero"/>
				
			</div>
			
			<label class="text-xl font-bold">Alquiler / Propiedad</label>
			<div>
				<input class="rounded w-full" type="boolean" name="alquiler"/>
			
			</div>
			
			<label class="text-xl font-bold">Cenizas / Cuerpo</label>
			<div>
				<input class="rounded w-full" type="boolean" name="cenizas"/>
				
			</div>
			
			
			<label class="text-xl font-bold">Libre</label>
			<div>
				<input class="rounded w-full" type="boolean" name="libre"/>

			</div>
			

			

			
			
		</div>
		<div class="pt-8">
			<input class="btn-primary" type="submit" name="guardar" value="Guardar"/>
			<a class="text-gray-500 ml-4" href="{{ route('nichos.index') }}">Cancelar</a>
		</div>
	</form>
</div>
@endsection