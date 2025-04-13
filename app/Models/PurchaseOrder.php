<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Product;
use App\Models\Supplier;

class PurchaseOrder extends Model
{
    use HasFactory;

    protected $table = 'ordenes_compra';

    protected $fillable = [
        'producto_id',
        'proveedor_id',
        'cantidad',
        'fecha_orden',
        'fecha_entrega_estimada',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'producto_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'proveedor_id');
    }
}
