<?php 

$heading = 'Home Page';

function dd($value) {
  echo '<pre>';
  var_dump($value);
  echo '</pre>';

  die();
}

echo $_SERVER['REQUEST_URI'];

require "views/index.view.php";