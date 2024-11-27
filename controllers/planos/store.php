<?php


// verificando se há usuário conectado
// usa função definida no arquivo auth.php


if (!hasUser()) {
    
    header('Location: /');

} else {

    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'POST' && isset($_POST['planName'], $_POST['planDuration'], $_POST['planCost'])){


        $plan = new Planos(connection());
        $result = $plan->save($_POST['planName'], $_POST['planDuration'],$_POST['planCost']);
    
        //essa função seria para os alunos escolherem os planos n é p ser aqui
        // $p->choosePlan($plan);
        if ($result) {
                header ('Location: /planos/index');
            }
    }
     
}

?>