<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
        protected $table = 'tbl_banner';
    protected $primaryKey = 'id_banner';


    public $timestamps = true;

    const CREATED_AT = 'criado_em_banner';
    const UPDATED_AT = 'atualizado_em_banner';

    protected $fillable = [
        'nome_banner',
        'foto_banner',
        'status_banner',
        
    ];

}
