<?php
require "../vendor/autoload.php";

use \Milon\Barcode\DNS2D;

if(!isset($_POST['url'])){
    header('Location: ../public/index.php');
}

if(isset($_POST['url'])){
    $res = trim($_POST['url']);
}
    $d = new DNS2D();
    $d->setStorPath(__DIR__.'/cache/');
    try{
        //$result = $d->getBarcodeHTML($res, 'QRCODE',8,8);
        $resul2 = $d->getBarcodePNG($res,'QRCODE',10,10);
    }catch(ErrorException $e){
        die($e->getMessage());
    }
    echo "<img src='data:image/png;base64," . $resul2 . "'/>";
    
  