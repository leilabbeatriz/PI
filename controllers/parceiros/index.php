<?php

if (!hasUser()) {

    header ('Location: /');

} else {


    $partners = new Parceiros(connection());

    $partners = $partners->allPartners();
    //incluir página
    include __DIR__ . '/../../pages/gestor/parceiros/index.php';        

}