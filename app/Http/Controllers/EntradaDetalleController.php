<?php

namespace App\Http\Controllers;

use App\Models\EntradaDetalle;
use Illuminate\Http\Request;

/**
 * Class EntradaDetalleController
 * @package App\Http\Controllers
 */
class EntradaDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entradaDetalles = EntradaDetalle::paginate();

        return view('entrada-detalle.index', compact('entradaDetalles'))
            ->with('i', (request()->input('page', 1) - 1) * $entradaDetalles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entradaDetalle = new EntradaDetalle();
        return view('entrada-detalle.create', compact('entradaDetalle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EntradaDetalle::$rules);

        $entradaDetalle = EntradaDetalle::create($request->all());

        return redirect()->route('entrada-detalles.index')
            ->with('success', 'EntradaDetalle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entradaDetalle = EntradaDetalle::find($id);

        return view('entrada-detalle.show', compact('entradaDetalle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entradaDetalle = EntradaDetalle::find($id);

        return view('entrada-detalle.edit', compact('entradaDetalle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EntradaDetalle $entradaDetalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntradaDetalle $entradaDetalle)
    {
        request()->validate(EntradaDetalle::$rules);

        $entradaDetalle->update($request->all());

        return redirect()->route('entrada-detalles.index')
            ->with('success', 'EntradaDetalle updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $entradaDetalle = EntradaDetalle::find($id)->delete();

        return redirect()->route('entrada-detalles.index')
            ->with('success', 'EntradaDetalle deleted successfully');
    }
}
