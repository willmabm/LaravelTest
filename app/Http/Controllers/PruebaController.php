<?php

namespace App\Http\Controllers;
use App\Prueba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePruebaRequest;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pruebas = Prueba::all();
        return view('pruebas.index', compact('pruebas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pruebas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePruebaRequest $request)
    {
        $prueba = new Prueba();
        $prueba->name = $request->input('name');
        $prueba->description = $request->input('description');
        $prueba->slug = $request->input('slug');
        $prueba->save();
        $pruebas = Prueba::all();
        return view('pruebas.index', compact('pruebas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Prueba $prueba)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Prueba $prueba)
    {
        return view('pruebas.edit', compact('prueba'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prueba $prueba)
    {
        $prueba->fill($request->all());
        $prueba->save();

        $pruebas = Prueba::all();
        return view('pruebas.index', compact('pruebas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prueba $prueba)
    {
        echo"sdfsfs";
        
    }
}
