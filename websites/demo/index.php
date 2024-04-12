<?php 

require 'functions.php';

$heading = 'Home Page';



// function dd($value) {
//   echo '<pre>';
//   var_dump($value);
//   echo '</pre>';

//   die();
// }

// if($_SERVER['REQUEST_URI'] === 'http://localhost/php/Laracasts/php-2024/websites/demo/index.php') 

// echo $_SERVER['REQUEST_URI'] === '/' ? 'bg-gray-900' : 'text-gray-300';

// echo $_SERVER['REQUEST_URI'];

// dd($_SERVER);

// function urlIs($value){
//   $_SERVER['REQUEST_URI'] === $value;
// }

require "views/index.view.php";