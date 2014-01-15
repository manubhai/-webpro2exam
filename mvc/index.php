<?php
$method = $_SERVER['REQUEST_METHOD'];
$cname  = ($method === 'GET') ? $_GET['c'] : $_POST['c'];
$aname  = ($method === 'GET') ? $_GET['a'] : $_POST['a'];
$cname  = ucfirst($cname) . 'Controller';
$aname  = $aname . 'Action';
$cfile  = dirname(__FILE__) . "/controllers/${cname}.php";

if (file_exists($cfile)) {
    require_once($cfile);

    $controller = new $cname();
    $controller->$aname();
}
