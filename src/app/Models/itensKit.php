<?php

namespace App\Models;

use App\Models\Kits;    // ✅ era itensKits (errado)
use App\Models\Produto;
use Illuminate\Database\Eloquent\Model;

class itensKit extends Model
{
    protected $table = 'tbl_itens_kit';
    protected $primaryKey = 'id_item_kit';

    public $timestamps = true;

    const CREATED_AT = 'criado_em_item_kit';
    const UPDATED_AT = 'atualizado_em_item_kit';

    protected $fillable = [
        'id_kit',
        'id_produto',
        'status_item_kit'
    ];

    // Item pertence a um Kit
    public function kit()
    {
     return $this->belongsTo(Kits::class, 'id_kit', 'id_kit');
    }

    // Item pertence a um Produto
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_produto', 'id_produto');
    }
}
