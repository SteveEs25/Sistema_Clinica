<?php

namespace App\Http\Controllers;

use App\Models\EntradaCabecera;
use App\Models\Proveedore;
use App\Models\TipoDocumento;
use App\Models\Estado;
use Illuminate\Http\Request;

/**
 * Class EntradaCabeceraController
 * @package App\Http\Controllers
 */
class EntradaCabeceraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entradaCabeceras = EntradaCabecera::paginate();

        return view('entrada-cabecera.index', compact('entradaCabeceras'))
            ->with('i', (request()->input('page', 1) - 1) * $entradaCabeceras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entradaCabecera = new EntradaCabecera();
        $proveedore = Proveedore::pluck('nombre_proveedor', 'id');
        $tipoDocumento = TipoDocumento::pluck('nombre_tipoDocumento', 'id');
        $estado = Estado::pluck('nombre_estado', 'id');

        return view('entrada-cabecera.create', compact('entradaCabecera', 'proveedore', 'tipoDocumento', 'estado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EntradaCabecera::$rules);

        $entradaCabecera = EntradaCabecera::create($request->all());

         return redirect()->route('entrada-cabeceras.create')->with('crear', 'creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entradaCabecera = EntradaCabecera::find($id);

        return view('entrada-cabecera.show', compact('entradaCabecera'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entradaCabecera = EntradaCabecera::find($id);
        $proveedore = Proveedore::pluck('nombre_proveedor', 'id');
        $tipoDocumento = TipoDocumento::pluck('nombre_tipoDocumento', 'id');
        $estado = Estado::pluck('nombre_estado', 'id');

        return view('entrada-cabecera.edit', compact('entradaCabecera', 'proveedore', 'tipoDocumento', 'estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EntradaCabecera $entradaCabecera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntradaCabecera $entradaCabecera)
    {
        request()->validate(EntradaCabecera::$rules);

        $entradaCabecera->update($request->all());

        return redirect()->route('entrada-cabeceras.index')->with('editar', 'editado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $entradaCabecera = EntradaCabecera::find($id)->delete();

        return redirect()->route('entrada-cabeceras.index');
    }
}
