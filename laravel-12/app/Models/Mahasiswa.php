<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Variable;

class Mahasiswa extends Model
{
   protected $table = "mahasiswa";
   protected $fillable = ['nama','npm','jk','tanggal_lahir','tempat_lahir','asal_sma','foto'];


}
