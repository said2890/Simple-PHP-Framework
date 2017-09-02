<?php

require_once __DIR__ . '/ShoppingCartCtrl.php';
$basketCtrl = new ShoppingCartCrl;

    if( isset($_POST['remove']) )
    {
        $id = $_POST['remove'];
        $basketCtrl->remove($id);
        $basketCtrl->renderView();
    }



?>