<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cupom;
use App\Models\ItemVenda;

class Venda extends Model
{
    protected $table = 'tbl_vendas';
    protected $primaryKey = 'id_venda';

    public $timestamps = true;

    const CREATED_AT = 'data_venda';
    const UPDATED_AT = 'atualizado_em_venda';

    protected $fillable = [
        'id_cliente',
        'id_usuario',
        'id_endereco',
        'id_cupom',
        'valor_venda',
        'status_venda',
        'data_entrega_venda',
        'forma_pagamento_venda',
        'entrega_venda',
        'observacao_venda',
        'valor_desconto_venda',
    ];

    // Relacionamento: uma venda tem vários itens
    public function itens()
    {
        return $this->hasMany(ItemVenda::class, 'id_venda', 'id_venda');
    }

    // Relacionamento: a venda pode ter um cupom
    public function cupom()
    {
        return $this->belongsTo(Cupom::class, 'id_cupom', 'id_cupom');
    }
}
