<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table="PESSOA_FISICA";
    protected $primarykey = "ID_PI";
    public $timestamps = false; #remove updated_at, created_at collumns
    use HasFactory;
}
