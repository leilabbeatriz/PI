<?php

class App 
{
    
    public static function run () {

        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        $member = new Member(connection());
        if(!$member->find('smartfitPI@gmail.com')){
            $member->insertManager();
            
        }else{
            if (isset($_SESSION['profile'])) {
                $profile = $_SESSION['profile'];
            } else {
                // Se o perfil não estiver definido na sessão, definimos como "common" por padrão
                $profile = 'common';
                $_SESSION['profile'] = $profile;    

            }
        Route::rotear ($uri, $method, $profile);

        }
        //recebe a requisição do usuário
        //mostrar a página



    }

}