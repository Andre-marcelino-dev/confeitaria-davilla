<?php

namespace App\Models;
use App\Models\itensKit;

use Illuminate\Database\Eloquent\Model;


class Kits extends Model
{
    protected $table = 'tbl_kits';
    protected $primaryKey = 'id_kit';


    public $timestamps = true;

    const CREATED_AT = 'criado_em_kit';
    const UPDATED_AT = 'atualizado_em_kit';

protected $fillable = [
    'nome_kit',
    'descricao_kit',
    'foto_kit',
    'slug_kit',
    'preco_kit',
    'destaque_kit',
    'whatsapp_kit',
    'preco_promocional_kit',
];
public function ProdutosKit(){
    return $this->hasMany(itensKit::class, 'id_kit', 'id_kit');
}

}
