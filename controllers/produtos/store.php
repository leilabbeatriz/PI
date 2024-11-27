<?php


// verificando se há usuário conectado
// usa função definida no arquivo auth.php


if (!hasUser()) {
    
    header('Location: /');

} else {

    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'POST' && isset($_POST['name'], $_POST['description'], $_POST['supplier'], $_POST['price'])){


        $products = new Produtos(connection());
        $result = $products->save($_POST['name'], $_POST['description'],$_POST['supplier'], $_POST['price'] );
    

        if ($result) {
                header ('Location: /produtos/index');
            }
    }
     
}

?>