<?php

namespace App\Models;
use App\Models\Kits;
use App\Models\Produto;


use Illuminate\Database\Eloquent\Model;

class itensKit extends Model
{
    protected $table =  'tbl_itens_kit';
    protected $primaryKey = 'id_item_kit';


    public $timestamps = true;

    const CREATED_AT = 'criado_em_kit';
    const UPDATED_AT = 'atualizado_em_kit';

    protected $fillable = [
        'nome_kit',
        'descricao_kit',
        'status_kit'
    ];
public function ProdutosKit(){
    return $this->hasMany(Kits::class, 'id_kit', 'id_kit');
}

public function produto(){
    return $this->belongsTo(Produto::class, 'id_produto', 'id_produto');
}
}
