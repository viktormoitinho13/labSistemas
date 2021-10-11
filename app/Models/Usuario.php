<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;
    protected $table="login"; #Alterar para o nome da tabela a ser utilizada
    protected $fillable = [ #Alterar as variáveis para os dado da tabela
        'loja_login',
        'loja_login_senha',
    ];
    protected $hidden = [
        'loja_login_senha', #Campo de senha do usuário
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
