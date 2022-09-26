<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::orderBy('created_at','desc')->get();
        return view('registros',compact('usuarios'));
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
    
        $newUsuario = new Usuario;
        $newUsuario->name = $request->input('nombre');
        $newUsuario->apellidos = $request->input('apellidos');
        $newUsuario->email = $request->input('email');
        $newUsuario->save();
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return "ver los resgitros";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Usuario::find($id);
        return view('editarRegistro',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $uptUsuario = Usuario::find($id);
        
        $uptUsuario->name = $request->input('nombre');
        $uptUsuario->apellidos = $request->input('apellidos');
        $uptUsuario->email = $request->input('email');
        $uptUsuario->save();
        return redirect('usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $delUser = Usuario::find($usuario->id);
        $delUser->delete();
         return redirect('usuario');
    }
}
