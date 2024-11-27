<?php

if (!hasUser()) {

    header ('Location: /');

} else {


    $products = new Produtos(connection());

    $products = $products->allProducts();
    //incluir página
    include __DIR__ . '/../../pages/gestor/produtos/index.php';        

}