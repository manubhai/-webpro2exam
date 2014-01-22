<?php
@session_start();

require_once 'mvc/controllers/maincontroller.php';
require_once 'mvc/controllers/productscontroller.php';
require_once 'mvc/controllers/salescontroller.php';
if (!isset($_GET['page']))
{
    $_GET['page'] = 'defalut';
}

if (isset($_GET['id']) && isset($_GET['quantity']) && $_SESSION['buyid'] == 0) {
    
    $_SESSION['buyid'] = 1;
    $buy = new salecontroller();
    $buy->buy($_GET['id'], $_GET['quantity']);
} else if ($_GET['page'] == 'buy') {
    
    $_SESSION['buyid'] = 0;
    $app = new salecontroller();
    $app->getinfo($_GET['id']);
    return FALSE;
} else if ($_GET['page'] == 'sale') {

    $app = new salecontroller();
    $app->all();
    return FALSE;
} else {

    $app = new productscontroller();
    $app->all();
    return FALSE;
}
?>
