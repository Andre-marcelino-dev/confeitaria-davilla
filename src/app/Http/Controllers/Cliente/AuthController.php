<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('cliente.auth.login');
    }

    public function autenticar(Request $request)
    {
        $request->validate([
            'email_cliente' => 'required|email',
            'senha_cliente' => 'required',
        ], [
            'email_cliente.required' => 'O e-mail é obrigatório.',
            'email_cliente.email'    => 'Informe um e-mail válido.',
            'senha_cliente.required' => 'A senha é obrigatória.',
        ]);

        $credenciais = [
            'email_cliente'  => $request->email_cliente,
            'password'       => $request->senha_cliente,
            'status_cliente' => 'ATIVO',
        ];

        if (Auth::guard('cliente')->attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->route('cliente.dash');
        }

        return back()->withInput()->with('error', 'E-mail ou senha inválidos ou conta inativa.');
    }

    public function logout(Request $request)
    {
        Auth::guard('cliente')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('cliente.login');
    }
}
