<?php
    ( $_GET['key'] = (isset($_GET['key']) ) ? $_GET['key'].'/' : 'index/index' );
    $key = $_GET['key'];
    $separator = explode ('/', $key);
    $controller = $separator[0];
    $action = ($separator[1] == null ? 'index' : $separator[1]);
    
    require_once 'system/controllers.php';
    
    require_once 'app/controller/'.$controller.'Controller.php';
    $app = new $controller();
    $app->$action();
    
?>
