<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../../style/planoalunos.css" rel="stylesheet">
    <link href="../../style/global.css" rel="stylesheet">
    <link rel="stylesheet" href="../../style/gestorDashboard.css">
    <title>Gym Fit | Ínicio</title>
</head>

<body>
    <?php
    include __DIR__ .  "../../../templates/nav.php";
    ?>

    <div class="container-fluid" style="background-color: rgb(6, 6, 167)">
        <div class="container py-5" id="projects">
            <div class="row">
                <div class="col">
                    <h2 class='text-white'>Dashboard</h2>
                    <hr class="bg-light border">
                </div>
            </div>
            <div class="row d-flex justify-content-around text-center column-gap-1 row-gap-3" id="options-dashboard">
                <div class="col col-md-2 d-flex align-items-center justify-content-center flex-column" onclick="window.location.href = '/members/crud'">
                    <div>
                        <img src="../../assets/icons/user.png" class="img-dashboard" alt="">
                    </div>
                    <h4>Deletar e editar usuários</h4>
                </div>
                <div class="col col-md-2 d-flex align-items-center justify-content-center flex-column" onclick="window.location.href = '/planos/create'">
                    <div>
                        <img src="../../assets/icons/add-plano.png" class="img-dashboard" alt="">
                    </div>
                    <h4>Adicionar planos</h4>
                </div>
                <div class="col col-md-2 d-flex align-items-center justify-content-center flex-column" onclick="window.location.href = '/planos/index'">
                    <div>
                        <img src="../../assets/icons/listar-plano.png" class="img-dashboard" alt="">
                    </div>
                    <h4>Listar planos</h4>
                </div>
                <div class="col col-md-2 d-flex align-items-center justify-content-center flex-column" onclick="window.location.href = '/parceiros/create'">
                    <div>
                        <img src="../../assets/icons/add-parceiro.png" class="img-dashboard" alt="">
                    </div>
                    <h4>Adicionar parceiros</h4>
                </div>

            </div>

            <div class="mt-3 row d-flex justify-content-around align-items-center text-center column-gap-1 row-gap-3" id="options-dashboard">

                <div class="col col-md-2 d-flex align-items-center justify-content-center flex-column" onclick="window.location.href = '/parceiros/index'">
                    <div>
                        <img src="../../assets/icons/listar-parceiros.png" class="img-dashboard" alt="">
                    </div>
                    <h4>Listar parceiros</h4>
                </div>
                <div class="col col-md-2 d-flex align-items-center justify-content-center flex-column" onclick="window.location.href = '/contato/send'">
                    <div>
                        <img src="../../assets/icons/email.png" width="120" class="img-dashboard" alt="">
                    </div>
                    <h4>Enviar notificação via email</h4>
                </div>
                <div class="col col-md-2 d-flex align-items-center justify-content-center flex-column" onclick="window.location.href = '/produtos/create'">
                    <div>
                        <img src="../../assets/icons/add-produto.png" class="img-dashboard" alt="">
                    </div>
                    <h4>Adicionar produtos</h4>
                </div>
                <div class="col col-md-2 d-flex align-items-center justify-content-center flex-column" onclick="window.location.href = '/produtos/index'">
                    <div>
                        <img src="../../assets/icons/listar-produtos.png" class="img-dashboard" alt="">
                    </div>
                    <h4>Listar produtos</h4>
                </div>

            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>