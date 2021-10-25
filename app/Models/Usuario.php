<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;
    protected $table="login_loja"; #Alterar para o nome da tabela a ser utilizada
    protected $fillable = [ #Alterar as variáveis para os dado da tabela
        'id_login',
        'senha_loja',
    ];
    protected $hidden = [
        'senha_loja', #Campo de senha do usuário
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
