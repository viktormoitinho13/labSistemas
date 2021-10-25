<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table="pessoa_fisica";
    public $timestamps = false; #remove updated_at, created_at collumns
    use HasFactory;
}
