<?php

function show($stuff){
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}

function esc($str){
    return htmlspecialchars($str);
}

function redirect($path){
    header("Location: ".ROOT."/".$path);
    die();
}

function splitURL(){
    $URL = $_GET['url'] ?? 'home';
    $URL = explode("/", trim($URL, "/"));
   
    return $URL;
}