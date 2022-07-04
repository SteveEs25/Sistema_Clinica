<?php

namespace App\Http\Controllers;

use App\Models\TipoProducto;
use Illuminate\Http\Request;

/**
 * Class TipoProductoController
 * @package App\Http\Controllers
 */
class TipoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoProductos = TipoProducto::paginate();

        return view('tipo-producto.index', compact('tipoProductos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoProductos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoProducto = new TipoProducto();
        return view('tipo-producto.create', compact('tipoProducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoProducto::$rules);

        $tipoProducto = TipoProducto::create($request->all());

        return redirect()->route('tipo-productos.index')
            ->with('success', 'TipoProducto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoProducto = TipoProducto::find($id);

        return view('tipo-producto.show', compact('tipoProducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoProducto = TipoProducto::find($id);

        return view('tipo-producto.edit', compact('tipoProducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoProducto $tipoProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoProducto $tipoProducto)
    {
        request()->validate(TipoProducto::$rules);

        $tipoProducto->update($request->all());

        return redirect()->route('tipo-productos.index')
            ->with('success', 'TipoProducto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoProducto = TipoProducto::find($id)->delete();

        return redirect()->route('tipo-productos.index')
            ->with('success', 'TipoProducto deleted successfully');
    }
}
