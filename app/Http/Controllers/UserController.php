<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Tipo_usuario;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function admin()
    {
        $user = User::all();
        return view('admin', compact('user'));
    }

    //probando...

    public function task(){
        return "hola mundo!";
    }



    public function store(Request $request)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'cargo' => ['required', 'string', 'max:255'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'tipo_usuario' => ['required', 'exists:tipo_usuarios,id']
    ]);

    $user = new User;
    $user->name = $request->name;
    $user->cargo = $request->cargo;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->tipo_usuario_id = $request->tipo_usuario; // Asignar el tipo de usuario seleccionado
    $user->save();

    return redirect()->route('admin.admin')->with('success', 'User created successfully.');
}

public function create()
{
    $tipo_usuarios = Tipo_usuario::all();
    return view('auth.register', compact('tipo_usuarios'));
    // dd($tipo_usuarios);
}
public function delete(User $user)
{
    $user->delete();

    return redirect()->route('admin.admin')->with('success', 'Usuario eliminado exitosamente.');
}



}
