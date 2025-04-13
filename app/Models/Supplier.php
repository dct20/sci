<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\PurchaseOrder; // Asegúrate de que esta clase exista

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'proveedores';

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
    ];

    public function purchaseOrders()
    {
        return $this->hasMany(PurchaseOrder::class, 'proveedor_id');
    }
}
