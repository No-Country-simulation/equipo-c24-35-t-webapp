<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControlStock extends Model
{
    protected $table = 'control_stocks';
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nombre',
        'fecha_realizado'
    ];
}
