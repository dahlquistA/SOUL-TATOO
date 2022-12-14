<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Provincia;
use App\Models\Localidad;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Search the specified resource from storage.
     *
     * @param  int  $group
     * @return \Illuminate\Http\Response
     */
    public function buscarProvincia(Request $request)
    {
        $localidad = Localidad::where('id', $request->idLocalidad)->first();

        $provincia = Provincia::where('id', $localidad->provincia_id)->first();
        if (!is_null($provincia)) {
            return response()->json([
                'status' => 200,
                'provincia' => $provincia->nombre,
            ]);
        } else {
            return response()->json(['status' => 400]);
        }
    }
}
