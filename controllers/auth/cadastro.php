<?php
// verificando se há usuário conectado
// usa função definida no arquivo auth.php

if (hasUser()) {
    header('Location: /');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: /members/create');
}


if (isset($_POST['name'], $_POST['user'], $_POST['age'], $_POST['email'], $_POST['password'], $_POST['plan'])) {
    
    $name = $_POST['name'];
    $user = $_POST['user'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_SESSION['profile'];

    $plans = new Planos(connection());
    //plans é um array com todos os planos cadastrados
    $plans = $plans->allPlans();
    foreach($plans as $plan) {
        if($plan['name'] == $_POST['plan']){
            $chosenPlan = $plan['id'];
        }
    }


    //usa função find() presente no arquivo database.php
    $Member = new Member(connection());
   
    $data = $Member->find($email);
  

    if ($data && password_verify($password, $data['password'])) {
        // $_SESSION['profile'] = $type;
        $_SESSION['user'] = $user;
        $_SESSION['id'] = $data['id'];
        header('Location: /');
    } else {
        
        if ($Member->save($name, $user, $age, $email, $password, $type, $chosenPlan)) {
            // $data = $User->find($email);
            // $_SESSION['profile'] = $type;
            $_SESSION['user'] = $user; 
            $_SESSION['id'] = $data['id'];    
            header('Location: /');
        } else {
            header('Location: /members/create');
        }
        //usa função save() presente no arquivo database.php        
        // $save = $User->save($name, $user, $age, $email, $password, $type);
    }

}


?>


