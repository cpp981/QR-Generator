<?php
session_start();
require "../vendor/autoload.php";

use \Milon\Barcode\DNS2D;

function download(){
    global $resul2;
    $rutaImg = "data:image/png;base64" . $resul2;
    $content = file_get_contents($rutaImg);
    header('Content-disposition: attachment; filename='.$rutaImg);
    header('Content-type: image/png');
    readfile($rutaImg);
}

if(!isset($_POST['url'])){
    header('Location: ../public/index.php');
}

if(isset($_POST['url'])){
    $res = trim($_POST['url']); //Url 
    $width = $_POST['widthV']; //Ancho
    $high = $_POST['highV']; //Alto
    $widthNumber = intval($width);
    $highNumber = intval($high);
 
}

if(isset($_POST['dwlb'])){

}
    $d = new DNS2D();
    $d->setStorPath(__DIR__.'/cache/');
    try{
        //$result = $d->getBarcodeHTML($res, 'QRCODE',8,8);
        $resul2 = $d->getBarcodePNG($res,'QRCODE',$widthNumber,$highNumber);
    }catch(ErrorException $e){
        die($e->getMessage());
    }
    echo "<img id='imgQr' src='data:image/png;base64," . $resul2 . "'/>";
    
  