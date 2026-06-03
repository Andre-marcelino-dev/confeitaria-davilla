<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class PerfilController extends Controller
{
    public function index()
    {
        $usuario = Auth::user();

        return view('admin.perfil.index', compact('usuario'));
    }

    public function update(Request $request)
    {
        $usuario = Auth::user();

        $request->validate([
            'nome_usuario' => 'required',
            'email_usuario' => 'required|email',
        ]);

        $usuario->nome_usuario = $request->nome_usuario;
        $usuario->email_usuario = $request->email_usuario;
        $usuario->perfil_usuario = $request->perfil_usuario;
        $usuario->status_usuario = $request->status_usuario;

        if ($request->filled('senha_usuario')) {
            $usuario->senha_usuario = Hash::make($request->senha_usuario);
        }

        if ($request->hasFile('foto_usuario')) {

            $arquivo = $request->file('foto_usuario');

            $nomeArquivo = time() . '.' . $arquivo->extension();

            $arquivo->move(
                public_path('dash/assets/img/user'),
                $nomeArquivo
            );

            $usuario->foto_usuario = $nomeArquivo;
        }

       
    }
}