<?php

namespace App\Http\Controllers;

use App\Models\Titular;
use Illuminate\Http\Request;

class TitularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$titulares = Titular::all();
		return view('titulars.index', compact('titulares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('titular.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
	

		Titular::create([
		'nombre' => request('nombre'),
		'primer_apellido' => request('primer_apellido'),
		'segundo_apellido' => request('segundo_apellido'),
			
		]);

		return redirect(route('titular.index'));
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titular  $titular
     * @return \Illuminate\Http\Response
     */
    public function show(Titular $titular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titular  $titular
     * @return \Illuminate\Http\Response
     */
    public function edit(Titular $titular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titular  $titular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titular $titular)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titular  $titular
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titular $titular)
    {
        //
    }
}
