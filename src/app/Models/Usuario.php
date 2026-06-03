<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

 
    protected $table = 'tbl_usuarios';
    protected $primaryKey = 'id_usuario';

    const CREATED_AT = 'criado_em_usuario';
    const UPDATED_AT = 'atualizado_em_usuario';

    protected $fillable = [
        'nome_usuario',
        'email_usuario',
        'senha_usuario',
        'perfil_usuario',
        'foto_usuario',
        'status_usuario',
    ];

    protected $hidden = [
        'senha_usuario',
    ];

    protected $casts = [
        'criado_em_usuario'     => 'datetime',
        'atualizado_em_usuario' => 'datetime',
    ];

    // Mapeia o campo de senha para o Authenticatable
    public function getAuthPassword()
    {
        return $this->senha_usuario;
    }

    // Perfis disponíveis
    public static function perfis(): array
    {
        return ['ATENDENTE', 'GERENTE', 'CAIXA', 'CONFEITEIRO', 'Administrador'];
    }
}
