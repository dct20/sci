<?php

class ProductController
{
    public function index()
    {
        $products = $this->getAllProducts();
        require_once 'views/products/index.blade.php';
    }

    public function create()
    {
        require_once 'views/products/create.blade.php';
    }

    public function store()
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        header("Location: /products");
    }

    public function edit($id)
    {
        $product = $this->getProductById($id);
        require_once 'views/products/edit.blade.php';
    }

    public function update($id)
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        header("Location: /products");
    }

    public function destroy($id)
    {
        header("Location: /products");
    }

    private function getAllProducts()
    {
        return [
            ['id' => 1, 'name' => 'Producto 1', 'description' => 'Descripción 1', 'price' => 20.00, 'stock' => 100],
            ['id' => 2, 'name' => 'Producto 2', 'description' => 'Descripción 2', 'price' => 15.00, 'stock' => 50]
        ];
    }

    private function getProductById($id)
    {
        return ['id' => 1, 'name' => 'Producto 1', 'description' => 'Descripción del producto 1', 'price' => 20.00, 'stock' => 100];
    }
}
