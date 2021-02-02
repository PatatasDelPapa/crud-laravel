<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['notas'] = Nota::paginate(5);
        return view('nota.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $datosNota = request()->all();

        $campos = [
            'Nombre' => 'required|string|max:100',
            'Descripción' => 'required|string|max:150',
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido',
        ];

        $this->validate($request, $campos, $mensaje);

        $datosNota = request()->except('_token');
        Nota::insert($datosNota);

        return redirect('nota')->with('mensaje', 'Nota agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nota = Nota::findOrFail($id);
        return view('nota.edit', compact('nota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $campos = [
            'Nombre' => 'required|string|max:100',
            'Descripción' => 'required|string|max:150',
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido',
        ];

        $this->validate($request, $campos, $mensaje);

        $datosNota = request()->except(['_token', '_method']);

        Nota::where('id', '=', $id)->update($datosNota);
        $nota = Nota::findOrFail($id);
        
        //return view('nota.edit', compact('nota'));
        
        return redirect('nota')->with('mensaje', 'Nota Modificada');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nota::destroy($id);
        return redirect('nota')->with('mensaje', 'Nota Eliminada');
    }
}
