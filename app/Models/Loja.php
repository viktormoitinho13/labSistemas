<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{   
    protected $table = "LOJAS";
    protected $primaryKey = "ID_LOJA";
    public $timestamps = false; #remove updated_at, created_at collumns
    use HasFactory;
}
