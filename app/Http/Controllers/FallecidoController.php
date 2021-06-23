<?php

namespace App\Http\Controllers;

use App\Models\Fallecido;
use Illuminate\Http\Request;

class FallecidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$fallecidos = Fallecido::all();
		return view('fallecidos.index', compact('fallecidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$fallecidos = Fallecido::all();
		return view('fallecidos.create', compact('fallecidos'));
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

		Fallecido::create([
			'nombre' => request('nombre'),
			'primer_apellido' => request('primer_apellido'),
			'segundo_apellido' => request('segundo_apellido'),
			
			'situacion'=> request( 'situacion'),
			'decreto'=>request('decreto'),
			'OS'=> request('OS'),
			'FechaSepelio'=> request('FechaSepelio'),
			'observaciones'=> request('observaciones')
			

		]);

		return redirect(route('fallecidos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fallecido  $fallecido
     * @return \Illuminate\Http\Response
     */
    public function show(Fallecido $fallecido)
    {
		return view('fallecidos.show', compact('fallecido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fallecido  $fallecido
     * @return \Illuminate\Http\Response
     */
    public function edit(Fallecido $fallecido)
    {
		return view('fallecidos.edit', compact('fallecido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fallecido  $fallecido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fallecido $fallecido)
    {
		
		$this->validate($request, [
			'nombre' => 'required',
		]);
		
		$fallecido->update([
			'nombre' => request('nombre'),
			'primer_apellido' => request('primer_apellido'),
			'segundo_apellido' => request('segundo_apellido'),
			'situacion'=> request('situacion'),
			'decreto'=>request('decreto'),
			'OS'=> request('OS'),
			'FechaSepelio'=> request('FechaSepelio'),
			'observaciones'=> request('observaciones')
		]);

	dd($fallecido);

		return redirect(route('fallecidos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fallecido  $fallecido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fallecido $fallecido)
    {
		$fallecido->delete();

		return back();
    }
}
