<?php

namespace App\Http\Controllers;

use App\Models\Nicho;
use App\Models\Fallecido;
use Illuminate\Http\Request;

class NichoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$nichos = Nicho::all();
		$fallecidos = Fallecido::all();
		return view('nichos.index', compact(['nichos','fallecidos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
			'numero' => 'required',
		]);

		Nicho::create([
			'numero' => request('numero'),
			'alquiler' => request('alquiler'),
			'libre' => request('libre'),
			'ceniza'=> request('ceniza')

		]);

		return redirect(route('nichos.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nicho  $nicho
     * @return \Illuminate\Http\Response
     */
    public function show(Nicho $nicho)
    {
	
		
		return view('nichos.show', compact('nicho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nicho  $nicho
     * @return \Illuminate\Http\Response
     */
    public function edit(Nicho $nicho)
    {
		$fallecidos = Fallecido::all();
	
		return view('nichos.edit', compact(['nicho','fallecidos']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nicho  $nicho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nicho $nicho)
    {
    	
		
		$fallecidos = Fallecido::all();
		$this->validate($request, [
			'numero' => 'required',
		]);

		$nicho->update([
			'numero' => request('numero'),
			'alquiler' => request('alquiler'),
			'libre' => request('libre'),
			'ceniza'=> request('ceniza'),
			
		]);

		
		/**
		* Almaceno en la relacion fallecido-nicho el id del fallecido y el id del nicho. 
		* Ver la tabla relacional
		* 
		* @return
		*/
		$nicho->fallecidos()->attach($request->fallecido_id);
		
		

		return redirect(route('nichos.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nicho  $nicho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nicho $nicho)
    {
        //
    }
}
