<?php
require_once 'db.php'; 

class ProductController {

    public function index() {
        global $conn;
        $query = "SELECT * FROM products";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    public function store($data) {
        global $conn;
        $name = $data['nombre'];
        $description = $data['descripcion'];
        $price = $data['precio'];
        $stock = $data['cantidad_en_stock'];

        $query = "INSERT INTO products (nombre, descripcion, precio, cantidad_en_stock) 
                  VALUES ('$name', '$description', $price, $stock)";
        return mysqli_query($conn, $query);
    }

    public function update($id, $data) {
        global $conn;
        $name = $data['nombre'];
        $description = $data['descripcion'];
        $price = $data['precio'];
        $stock = $data['cantidad_en_stock'];

        $query = "UPDATE products SET 
                  nombre='$name', descripcion='$description', precio=$price, cantidad_en_stock=$stock 
                  WHERE id=$id";
        return mysqli_query($conn, $query);
    }

    public function delete($id) {
        global $conn;
        $query = "DELETE FROM products WHERE id=$id";
        return mysqli_query($conn, $query);
    }

    public function show($id) {
        global $conn;
        $query = "SELECT * FROM products WHERE id=$id";
        return mysqli_query($conn, $query);
    }
}
?>
