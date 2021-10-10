<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\UserInterface;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;
    protected $table="testLogin"; #Alterar para os dados da tabela
    protected $fillable = [ #Alterar as variáveis para os dado da tabela
        'username',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /*
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];*/
}
