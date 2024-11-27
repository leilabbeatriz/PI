<?php


// verificando se há usuário conectado
// usa função definida no arquivo auth.php


if (!hasUser()) {
    
    header('Location: /');

} else {

    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'POST' && isset($_POST['name'], $_POST['age'], $_POST['email'], $_POST['function'])){


        $partners = new Parceiros(connection());
        $result = $partners->save($_POST['name'], $_POST['age'],$_POST['email'], $_POST['function'] );
    

        if ($result) {
                header ('Location: /parceiros/index');
            }
    }
     
}

?>