<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Venda;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    // GET /api/v1/pedidos
    // Lista os pedidos do cliente logado, do mais novo para o mais antigo
    public function index(Request $request)
    {
        $pedidos = Venda::with(['itens.produto', 'cupom'])
            ->where('id_cliente', $request->user()->id_cliente)
            ->orderByDesc('data_venda')
            ->orderByDesc('id_venda')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $pedidos,
        ]);
    }

    // GET /api/v1/pedidos/{id}
    // Só encontra o pedido se ele for do cliente logado
    public function show(Request $request, int $id)
    {
        $pedido = Venda::with(['itens.produto', 'cupom'])
            ->where('id_venda', $id)
            ->where('id_cliente', $request->user()->id_cliente)
            ->firstOrFail();

        return response()->json([
            'success' => true,
            'data' => $pedido,
        ]);
    }
}
