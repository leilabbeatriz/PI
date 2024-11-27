<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de planos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../style/global.css">
    <link rel="stylesheet" href="../../../style/alunos.css">
</head>
<body>

<?php

include __DIR__ .  "../../../../templates/nav.php";

?>
    <!-- essa pag é para o gestor verfificar os planos que ele cadastrou -->
    <!-- precisa de css -->
        <!-- coloquei como um select só p ve se tava funcionando dps agt tem q ve uma forma p ficar mais bonitinho-->
    

    <div class="container">

        <h2 class="mt-4 mb-4 text-white text-center fw-semibold">Lista de planos</h2>

        <div id="resultsTable">
            <div class="table-responsive">
                <table class="table table-light text-center">
                    <thead>
                        <th>ID</th>
                        <th>Plano</th>
                    </thead>
                    <tbody>
                        <?php foreach($plans as $plan) { ?>
                            <tr>
                                <td><?= $plan['id'] ?></td>
                                <td><?= $plan['name'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>