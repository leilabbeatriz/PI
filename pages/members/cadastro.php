<?php

$plans = new Planos(connection());
//plans é um array com todos os planos cadastrados
$plans = $plans->allPlans();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="/style/cadastro.css">
</head>
<body>
    
    <h1 class="texto">Gym Fit</h1>
    <div class="center">
        <form action="/members/store" method="POST" class="container">
            <label for="name" class="texto">Nome</label>
            <input type="text" name="name">

            <label for="user" class="texto">Idade</label>
            <input type="number" name="age">

            <label for="email" class="texto">Email</label>
            <input type="text" name="email">

            <label for="plan" class="texto">Plano</label>
            <select name="plan">
            <?php foreach($plans as $plan) { ?>
                <option value=<?= $plan['name'] ?>><?= $plan['name'] ?></option>
            <?php } ?>
            </select> 

            <label for="user" class="texto">Usuário</label>
            <input type="text" name="user">

            <label for="password" class="texto">Senha</label>
            <input type="text" name="password">
            <button>Enviar</button>
        </form>
    </div>
    
    
</body>
</html>