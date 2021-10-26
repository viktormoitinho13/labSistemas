<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{   
    protected $table = "ESTOQUE";
    public $timestamps = false; #remove updated_at, created_at collumns
    use HasFactory;
}
