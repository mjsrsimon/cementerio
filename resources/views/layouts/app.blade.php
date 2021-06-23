<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

		<!-- Styles -->
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">

		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer> </script>
	</head>
	<body class="font-sans antialiased">
		<div class="min-h-screen bg-gray-100">
			
			@include('layouts.navigation')
			<!-- Page Heading -->
			<header class="bg-white shadow">
				<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
					<!-- aqui habia 2 llaves abrir + cierre y en medio: $header-->
					
					<!--ICONO nichos-->
					<x-nav-link :href="route('nichos.index')" :active="request()->routeIs('nichos')">
						<div
                            class="text-center text-blue-700 rounded-lg bg-blue-500 bg-opacity-25  py-3 px-3 text-sm btn-primary">
							NICHOS
						</div>
					</x-nav-link>
					
					
				</div>
			</header>
			

			<!-- Page Content -->
			<main>
				@yield('content')
				{{$slot ?? ''}}
			</main>
		</div>
	</body>
</html>
