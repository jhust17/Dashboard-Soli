<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Solicitud;
use Illuminate\Http\Response;

class SolicitudController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
      * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes=Solicitud::all();
        return view('solicitud.index')->with('solicitudes',$solicitudes);
    }

    /**
     * Show the form for creating a new resource.
     *  @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicitud.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $solicitudes = new Solicitud();

        $solicitudes->solicitud= $request-> get('solicitud');
        $solicitudes->estado= $request-> get('estado');
        $solicitudes->bloque= $request-> get('bloque');
        $solicitudes->aula= $request-> get('aula');
        $solicitudes->tipo= $request-> get('tipo');
        $solicitudes->detalle= $request-> get('detalle');
        $solicitudes->idusuarioapp= $request-> get('idusuarioapp');

        $solicitudes->save();

        return redirect('/solicitudes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $solicitud=Solicitud::find($id);
        return view('solicitud.edit')->with('solicitud',$solicitud);
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $solicitud = Solicitud::find($id);

        $solicitud->solicitud= $request-> get('solicitud');
        $solicitud->estado= $request-> get('estado');
        $solicitud->bloque= $request-> get('bloque');
        $solicitud->aula= $request-> get('aula');
        $solicitud->tipo= $request-> get('tipo');
        $solicitud->detalle= $request-> get('detalle');
        $solicitud->idusuarioapp= $request-> get('idusuarioapp');

        $solicitud->save();

        return redirect('/solicitudes');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $solicitud = Solicitud::find($id);
        $solicitud->delete();

        return redirect('/solicitudes');
    }
}
