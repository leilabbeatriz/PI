<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../style/global.css">
    <link rel="stylesheet" href="../../../style/alunos.css">
    <link href="../../../style/planogestor.css" rel="stylesheet">
</head>

<body>

    <?php
    include __DIR__ .  "../../../../templates/nav.php";
    ?>

    <div class="container">

        <h1 class="text-center" id="titulo">Editar usuário</h1>

        <div class="containerAll">
            <form action="/members/crud/edit" method="POST" id="formulario">
                <div class="input-group mb-3 area">
                    <span class="input-group-text" id="inputGroup-sizing-default">Antigo email</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="old_email">
                </div>
                <div class="input-group mb-3 area">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name">
                </div>
                <div class="input-group mb-3 area">
                    <span class="input-group-text" id="inputGroup-sizing-default">Idade</span>
                    <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="age">
                </div>
                <div class="input-group mb-3 area">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email">
                </div>
                <div class="input-group mb-3 area">
                    <span class="input-group-text" id="inputGroup-sizing-default">Plano</span>
                    <select class="form-select form-select-lg" aria-label="Large select example" name="plan">
                        <?php

                        $plans = new Planos(connection());
                        //plans é um array com todos os planos cadastrados
                        $plans = $plans->allPlans();

                        foreach ($plans as $plan) {
                            echo '<option value="' . $plan['id'] . '">' . $plan['name'] . '</option>';
                        }
                        ?>
                    </select>

                </div>
                <div class="input-group mb-3 area">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id tipo usuario</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="type">
                </div>
                <div class="input-group mb-3 area">
                    <span class="input-group-text" id="inputGroup-sizing-default">Usuário</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="user">
                </div>
                <div class="input-group mb-3 area">
                    <span class="input-group-text" id="inputGroup-sizing-default">Senha</span>
                    <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="password">
                </div>
                <div class="input-group mb-3 area">
                    <span class="input-group-text" id="inputGroup-sizing-default">Confirmar senha</span>
                    <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="password-confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>