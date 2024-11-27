<?php

class Route 
{
    protected static $routes;

    protected $caminho; // URI
    protected $controller;
    protected $method;

    protected $profiles; //nivel de acesso da rota

    public function __construct (string $caminho, string $controller, string $method, $profile) {
        $this->caminho = $caminho;
        $this->controller = $controller;
        $this->method = $method;
        $this->profiles = $profile;
    }

    public function getCaminho () : string {
        return $this->caminho;
    }

    public function getController () : string {
        return $this->controller;
    }

    public function getMethod () : string {
        return $this->method;
    }

    public function getProfile () : string {
        return self::$profile;
    }

    public static function get (string $caminho, string $controller, $profile) : Route {
        //função para registrar uma rota do tipo GET
        if (self::$routes == NULL) { //checa se a lista tá nula
            self::$routes = [];
        }
        //cria e adiciona a rota na lista de rotas
        $rota = new Route($caminho, $controller, 'GET' , $profile);
        array_push(self::$routes, $rota);
        return $rota;
    }

    public static function post (string $caminho, string $controller, $profile) : Route {
        if (self::$routes == NULL) { //checa se a lista tá nula
            self::$routes = [];
        }
        //cria e adiciona a rota na lista de rotas
        $rota = new Route($caminho, $controller, 'POST', $profile);
        array_push(self::$routes, $rota);
        return $rota;
    }

    public static function rotear (string $caminho, string $method, string $profile) {
        //implementar
        
        foreach (self::$routes as $rota) {            
            if ($rota->getCaminho() == $caminho) {
                if ($rota->getMethod() == $method) {
                    if ($rota->only($profile)) {
                        
                        include __DIR__ . $rota->getController();
                        exit;
                    }
                    else{
                        echo "Vc não pode acessar";
                        exit;
                    }
                }else {
                    echo "Método inadequado";
                    exit;
                }
                
            }
        }

        echo "Página não encontrada";
        exit;

        
    }

    public function only ($profile) {
        
        // die;
        foreach ($this->profiles as $prof) {
            
            if ($prof == $profile) {
                return true;
            }
        }
        return false;
}  

    // public function can (string $valor) : Route {
    //     return $this;
    // }

}