<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cupom extends Model
{
    protected $table = 'tbl_cupons';
    protected $primaryKey = 'id_cupom';

    public $timestamps = true;

    const CREATED_AT = 'criado_em_cupom';
    const UPDATED_AT = 'atualizado_em_cupom';

    protected $fillable = [
        'codigo_cupom',
        'valor_desconto_cupom',
        'data_inicio_cupom',
        'data_fim_cupom',
        'status_cupom',
    ];
}
