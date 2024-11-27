<?php

if (hasUser()) {
    header("Location: /");
}

if (isset($_POST['email'], $_POST['password'])) {
    //login

    $email = $_POST['email'];
    $password = $_POST['password'];

    //o código de busca de usuário está
    //encapsulado na classe User (modelo)
    $Member = new Member(connection());    
    $data = $Member->find($email);


    if ($data && password_verify($password, $data['password'])) {
        $_SESSION['user'] = $data['user'];
        $_SESSION['profile'] = $data['type'];
        header('Location: /');
    } else {
        header('Location: /members/login');
    }
} else {
    header('Location: /members/login');
}
?>
