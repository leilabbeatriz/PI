<?php 
include __DIR__ .  "../../../../templates/nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../../../style/planogestor.css" rel="stylesheet">
</head>
<body>
    <div class="containerAll">
        <h1 id="titulo">Cadastro de Produtos</h1>
        <form action="/produtos/store" method="post" id="formulario">
            <div class="input-group mb-3 area">
                <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name">
            </div>
            <div class="input-group mb-3 area">
                <span class="input-group-text" id="inputGroup-sizing-default">Descrição</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="description">
            </div>
            <div class="input-group mb-3 area">
                <span class="input-group-text" id="inputGroup-sizing-default">Fornecedor</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="supplier">
            </div>
            <div class="input-group mb-3 area">
                <span class="input-group-text" id="inputGroup-sizing-default">Preço (Unidade)</span>
                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button> 
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>