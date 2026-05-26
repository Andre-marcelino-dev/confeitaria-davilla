<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'tbl_clientes';
    protected $primaryKey = 'id_cliente';

    // 🔑 INDIQUE OS NOMES PERSONALIZADOS DAS COLUNAS DE TIMESTAMPS
    const CREATED_AT = 'criado_em_cliente';
    const UPDATED_AT = 'atualizado_em_cliente';
    
    // Certifique-se de que todos os campos estão no $fillable para permitir salvar
    protected $fillable = [
        'nome_cliente', 'tipo_cliente', 'cpf_cnpj_cliente', 'data_nasc_cliente',
        'endereco_cliente', 'numero_cliente', 'complemento_cliente', 'bairro_cliente',
        'cidade_cliente', 'uf_cliente', 'cep_cliente', 'email_cliente', 
        'senha_cliente', 'telefone_cliente', 'foto_cliente', 'status_cliente'
    ];
}