<?php
include_once 'Router.php';

modules_load_routes();

$r = Router::Instance();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

function home(){
    print("q");
    echo "q";
}
?>