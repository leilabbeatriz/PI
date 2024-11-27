<?php 
include __DIR__ .  "../../../../templates/nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../../../style/email.css" rel="stylesheet">
</head>
<body>
    
    <div class="containerAll">
        
        <h1 class="titulo">Email</h1>
        <form action="/contato/store" method="post" id="formulario">
            <div class="input-group mb-3 area">
                <span class="input-group-text" id="inputGroup-sizing-default">Destinatário</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3 area">
                <span class="input-group-text" id="inputGroup-sizing-default">Assunto</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group area">
                <span class="input-group-text">Mensagem</span>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
            <button type="button" class="btn btn-primary">Enviar</button> 
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>