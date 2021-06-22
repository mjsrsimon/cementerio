<?php

namespace App\Http\Controllers;

use App\Models\Nicho;
use Illuminate\Http\Request;
use App\Models\Fallecido;

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
		return view('nichos.index', compact(['nichos', 'fallecidos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$nichos = Nicho::all();
		return view('nichos.create', compact('nichos'));
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
			'cenizas' => request('cenizas'),
			'libre'=> request( 'libre')
			


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
		return view('nichos.edit', compact('nicho'));
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

		$this->validate($request, [
			'numero' => 'required',
		]);

		$nicho->update([
			'numero' => request('numero'),
			'alquiler' => request('alquiler'),
			'cenizas' => request('cenizas'),
			'libre'=> request( 'libre')
			
		]);


		return redirect(route('titulars.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nicho  $nicho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nicho $nicho)
    {
		$nicho->delete();

		return back();
    }
}
