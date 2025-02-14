<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemsControlStock extends Model
{
    protected $table = 'items_control_stocks';
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id_control_stock',
        'nombre',
        'descripcion',
        'precion',
        'cantidad',
    ];
}
