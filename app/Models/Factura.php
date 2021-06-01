<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table = 'facturas_procesadas';

	protected $fillable = ['nro_factura','fecha','nombre','nit','precio','iva','sub_total','total','id'];
}
