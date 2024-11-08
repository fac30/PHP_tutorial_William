<?php

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function abort(){
    http_response_code(404);
    require 'controllers/404.php';
    die();
}

class Person {
    public $name;
    public $age;

    public function breathe(){
        echo "breathing";
    }
    
}
?>