<?php

isset($_GET['a'])? $action = $_GET['a'] : $action='home';

switch ( $action ){
    case 'home':
      $page = './components/'.$module.'/home.php';
    break;

    default :
      $page =  './components/'.$module.'/home.php';
    break;
}

?>
