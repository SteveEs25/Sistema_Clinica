<?php

namespace App\Http\Controllers;

use App\Models\EntradaCabecera;
use App\Models\EntradaDetalle;
use App\Models\Producto;
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
        $entradaCabecera = EntradaCabecera::pluck('numero_factura', 'id');
        $producto = Producto::pluck('nombre_producto', 'id');

        return view('entrada-detalle.create', compact('entradaDetalle', 'entradaCabecera', 'producto'));
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

        return redirect()->route('entrada-detalles.create')->with('crear', 'creado');
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
        $entradaCabecera = EntradaCabecera::pluck('numero_factura', 'id');
        $producto = Producto::pluck('nombre_producto', 'id');

        return view('entrada-detalle.edit', compact('entradaDetalle', 'entradaCabecera', 'producto'));
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

        return redirect()->route('entrada-detalles.index')->with('editar', 'editado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $entradaDetalle = EntradaDetalle::find($id)->delete();

        return redirect()->route('entrada-detalles.index');
    }
}
