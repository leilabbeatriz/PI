<?php
session_start();

include __DIR__ . '/database.php';

include __DIR__ . '/auth.php';

include __DIR__ . '/models/Member.php';
include __DIR__ . '/models/Planos.php';
include __DIR__ . '/models/Parceiros.php';
include __DIR__ . '/models/Produtos.php';

include __DIR__ . '/Route.php';

//registro de rotas
include __DIR__ . '/web.php';
include __DIR__ . '/App.php';

//atenda a requisição
App::run();

$connection = connection();

//FUNÇÃO PARA PEGAR URL
// $rota = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// rotear($rota, $rotas); //rotas exite pq a pagina rota foi incluida

?>