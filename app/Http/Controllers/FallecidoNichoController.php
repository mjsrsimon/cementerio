<?php

namespace App\Http\Controllers;

use App\Models\FallecidoNicho;
use Illuminate\Http\Request;
use App\Models\Nicho;
use App\Models\Fallecido;


class FallecidoNichoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FallecidoNicho  $fallecidoNicho
     * @return \Illuminate\Http\Response
     */
    public function show(FallecidoNicho $fallecidoNicho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FallecidoNicho  $fallecidoNicho
     * @return \Illuminate\Http\Response
     */
    public function edit(FallecidoNicho $fallecidoNicho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FallecidoNicho  $fallecidoNicho
     * @return \Illuminate\Http\Response
     */
	 public function update(Request $request, Fallecido $fallecido, Nicho $nicho, FallecidoNicho $fallecidoNicho )
    {
		$this->validate($request, [
			'id' => 'required',
		]);

		$fallecidoNicho->update([
			'id' => request('id'),
			'fallecido_id ' => request('fallecido_id '),
			'nicho_id' => request('nicho_id'),
		]);


		return redirect(route('titulars.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FallecidoNicho  $fallecidoNicho
     * @return \Illuminate\Http\Response
     */
    public function destroy(FallecidoNicho $fallecidoNicho)
    {
        //
    }
}
