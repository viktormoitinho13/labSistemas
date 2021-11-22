<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    protected $table = "FABRICANTE";
    protected $primarykey = "ID_FABRICANTE";
    public $timestamps = false; #remove updated_at, created_at collumns
    use HasFactory;
}
