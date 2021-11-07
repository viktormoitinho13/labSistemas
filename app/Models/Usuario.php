<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;
    
    protected $table="LOGIN_ADM"; #Alterar para o nome da tabela a ser utilizada
    protected $primaryKey = 'ID_LOGIN_ADM';
    protected $fillable = [ #Alterar as variáveis para os dado da tabela
        'USER_ADM',
        'SENHA_ADM',
    ];
    protected $hidden = [
        'SENHA_ADM', #Campo de senha do usuário
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function getAuthPassword()
    {
        return $this->SENHA_ADM;
    }
}
