<?php

if (isset($_POST['name'], $_POST['user'], $_POST['age'], $_POST['email'], $_POST['password'], $_POST['plan'], $_POST['type'])) {
    $old_email = $_POST['old_email'];
    $name = $_POST['name'];
    $user = $_POST['user'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    $chosenPlan = $_POST['plan'];
    

}
$member = new Member(connection());
$member->edit($name, $user, $age, $email, $password, $type, $chosenPlan, $old_email);
header('Location: /members/crud');