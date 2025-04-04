<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    use HasFactory;

    protected $table = 'transporte';
    protected $primaryKey = 'id_transporte';
    public $timestamps = false;

    protected $fillable = ['codigo', 'nombre', 'razon_social'];
}
