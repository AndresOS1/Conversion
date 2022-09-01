<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    use HasFactory;

    protected $table  = "monedas";

    protected $primaryKey = "id_moneda";


    protected $fillable = ['moneda','valor','valor_usd'];

    protected $hidden = ['id_moneda'];
}
