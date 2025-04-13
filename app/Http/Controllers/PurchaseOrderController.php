<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\PurchaseOrder;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function index()
    {
        $ordenes = PurchaseOrder::with(['product', 'supplier'])->get();
        return view('ordenes.index', compact('ordenes'));
    }

    public function create()
    {
        $productos = Product::all();
        $proveedores = Supplier::all();
        return view('ordenes.create', compact('productos', 'proveedores'));
    }

    public function store(Request $request)
    {
        PurchaseOrder::create($request->all());
        return redirect()->route('ordenes.index')->with('success', 'Orden de compra creada correctamente.');
    }

    public function edit($id)
    {
        $orden = PurchaseOrder::findOrFail($id);
        $productos = Product::all();
        $proveedores = Supplier::all();
        return view('ordenes.edit', compact('orden', 'productos', 'proveedores'));
    }

    public function update(Request $request, $id)
    {
        $orden = PurchaseOrder::findOrFail($id);
        $orden->update($request->all());
        return redirect()->route('ordenes.index')->with('success', 'Orden actualizada correctamente.');
    }

    public function destroy($id)
    {
        PurchaseOrder::destroy($id);
        return redirect()->route('ordenes.index')->with('success', 'Orden eliminada correctamente.');
    }
}
