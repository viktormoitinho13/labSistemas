<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadosProduto extends Model
{
    protected $table = "DADOS_PRODUTO";
    public $timestamps = false; #remove updated_at, created_at collumns
    use HasFactory;
}
