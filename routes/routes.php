<?php

$controller = new ProductController();

if ($_SERVER['REQUEST_URI'] == '/products') {
    $controller->index();
}

if ($_SERVER['REQUEST_URI'] == '/products/create') {
    $controller->create();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['REQUEST_URI'] == '/products/store') {
    $controller->store();
}

if (preg_match('/^\/products\/edit\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
    $controller->edit($matches[1]);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && preg_match('/^\/products\/update\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
    $controller->update($matches[1]);
}

if (preg_match('/^\/products\/delete\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
    $controller->destroy($matches[1]);
}
