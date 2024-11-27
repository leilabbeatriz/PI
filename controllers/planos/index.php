<?php

if (!hasUser()) {

    header ('Location: /');

} else {


    $plans = new Planos(connection());
    //plans é um array com todos os planos cadastrados
    $plans = $plans->allPlans();
    //incluir página
    include __DIR__ . '/../../pages/gestor/planos/index.php';        

}