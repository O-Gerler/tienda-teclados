<?php

namespace App\Http\Controllers;

use App\Models\teclado;
use Illuminate\Http\Request;

class TecladoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teclados = teclado::all();

        return view('teclado.index', ['teclados' => $teclados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teclado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $teclado = new teclado();

        // $teclado->nombre = $request->input('nombre');
        // $teclado->modelo = $request->input('modelo');
        // $teclado->distribucion = $request->input('distribucion');
        // $teclado->marca = $request->input('marca');
        // $teclado->cantidad = $request->input('cantidad');
        // $teclado->precio = $request->input('precio');

        // $teclado->save();

        teclado::create([
            "nombre" => $request->input('nombre'),
            "modelo" => $request->input('modelo'),
            "distribucion" => $request->input('distribucion'),
            "marca" => $request->input('marca'),
            "cantidad" => $request->input('cantidad'),
            "precio" => $request->input('precio'),
        ]);
    
        return redirect(route('teclado.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(teclado $teclado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teclado $teclado)
    {
        return view('teclado.edit', ['teclado' => $teclado]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, teclado $teclado)
    {
        $teclado->nombre = $request->input('nombre');
        $teclado->modelo = $request->input('modelo');
        $teclado->distribucion = $request->input('distribucion');
        $teclado->marca = $request->input('marca');
        $teclado->cantidad = $request->input('cantidad');
        $teclado->precio = $request->input('precio');

        $teclado->save();

        return redirect(route('teclado.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(teclado $teclado)
    {
        $teclado->delete();
        return redirect(route('teclado.index'));
    }
}
