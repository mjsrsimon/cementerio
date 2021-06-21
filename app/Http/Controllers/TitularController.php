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
		$titulares = Titular::all();
		return view('titulars.create', compact('titulares'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
		$this->validate($request, [
			'nombre' => 'required',
		]);

		Titular::create([
		'nombre' => request('nombre'),
		'primer_apellido' => request('primer_apellido'),
		'segundo_apellido' => request('segundo_apellido'),
			
		]);

		return redirect(route('titulars.index'));
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titular  $titular
     * @return \Illuminate\Http\Response
     */
    public function show(Titular $titular)
    {
		 return view('titulars.show', compact('titular'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titular  $titular
     * @return \Illuminate\Http\Response
     */
    public function edit(Titular $titular)
    {
		 return view('titulars.edit', compact('titular'));
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
		$this->validate($request, [
			'nombre' => 'required',
		]);

		$titular->update([
		'nombre' => request('nombre'),
		'primer_apellido' => request('primer_apellido'),
		'segundo_apellido' => request('segundo_apellido'),
		]);


		return redirect(route('titulars.index'));
		
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titular  $titular
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titular $titular)
    {
        $titular->delete();

		return back();
    }
}
