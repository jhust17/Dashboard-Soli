<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Usuarioapp;
use Illuminate\Http\Response;

class UsuarioappController extends Controller
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
        $usuarios=Usuarioapp::all();
        return view('usuarioapp.index')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarioapp.create');
    }

    /**
     * Store a newly created resource in storage.
     *  @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new Usuarioapp();

        $usuarios->nombre= $request-> get('nombre');
        $usuarios->user= $request-> get('user');
        $usuarios->password= $request-> get('password');
        $usuarios->rol= $request-> get('rol');

        $usuarios->save();

        return redirect('/usuariosapp');
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
     *  @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $usuario=Usuarioapp::find($id);
        return view('usuarioapp.edit')->with('usuario',$usuario);
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuarioapp::find($id);

        $usuario->nombre= $request-> get('nombre');
        $usuario->user= $request-> get('user');
        $usuario->password= $request-> get('password');
        $usuario->rol= $request-> get('rol');
    
        $usuario->save();

        return redirect('/usuariosapp');
    }

    /**
     * Remove the specified resource from storage.
     *  @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $usuario = Usuarioapp::find($id);
        $usuario->delete();

        return redirect('/usuariosapp');
    }
}
