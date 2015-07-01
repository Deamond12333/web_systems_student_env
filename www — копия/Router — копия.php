<?php
class Router{
    private $routes = null;
    public __constructor(){
        $this->routes = array();
    }

    public function get($pattern, $callback){
        $this->set('GET', $pattern, $callback);
    }

    public function post($pattern, $callback){
        $this->set('POST', $pattern, $callback);
    }

    private function set($type, $pattern, $callback){
        if(function_exists($callback)){
            new Exception("Method $callback not exists");
        }
        $this->routes[$type][$pattern] = $callback;
    }

    public function process($method, $uri){
        if(in_array($method, array('GET', 'POST'))){
            new Exception("Request method should be GET or POST");
        }

        $active_routes = $this->routes[$method];
        
        foreach ($active_routes as $pattern => $callback) {
            if (preg_match_all("/$pattern/", $uri, $matches) !== false) {
                $callback();
                break;
            }
        $matches = array();
        }
    }
}