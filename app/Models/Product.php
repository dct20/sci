<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'cantidad_en_stock',
    ];

    public function purchaseOrders()
    {
        return $this->hasMany(PurchaseOrder::class, 'producto_id');
    }
}
