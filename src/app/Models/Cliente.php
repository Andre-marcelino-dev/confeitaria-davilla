<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // ← troca Model por Authenticatable

class Cliente extends Authenticatable
{
    protected $table = 'tbl_clientes';
    protected $primaryKey = 'id_cliente';

    const CREATED_AT = 'criado_em_cliente';
    const UPDATED_AT = 'atualizado_em_cliente';

    // Diz ao Laravel qual coluna é a senha
    protected $authPasswordName = 'senha_cliente'; // Laravel 11+
    // Se usar Laravel 10 ou abaixo, sobrescreva o método:
    // public function getAuthPassword() { return $this->senha_cliente; }

    protected $hidden = ['senha_cliente'];

    protected $fillable = [
        'nome_cliente', 'tipo_cliente', 'cpf_cnpj_cliente', 'data_nasc_cliente',
        'endereco_cliente', 'numero_cliente', 'complemento_cliente', 'bairro_cliente',
        'cidade_cliente', 'uf_cliente', 'cep_cliente', 'email_cliente',
        'senha_cliente', 'telefone_cliente', 'foto_cliente', 'status_cliente'
    ];
}
