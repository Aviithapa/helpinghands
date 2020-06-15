<?php
$code = "BCGcode128";
require_once('../class/BCGColor.php');
require_once('../class/BCGBarcode.php');
require_once('../class/BCGDrawing.php');
include_once('../class/BCGcode128.barcode.php');

$filetypes = array('PNG' => BCGDrawing::IMG_FORMAT_PNG, 'JPEG' => BCGDrawing::IMG_FORMAT_JPEG, 'GIF' => BCGDrawing::IMG_FORMAT_GIF);
$drawException = null;
try{
    $color_black = new BCGColor(0, 0, 0);
    $color_white = new BCGColor(255, 255, 255);

    $code_generated = new BCGcode128();
    $code_generated->setThickness(30);
	$code_generated->setFont(0);
    $code_generated->setScale(3);
    $code_generated->setBackgroundColor($color_white);
    $code_generated->setForegroundColor($color_black);

    if ($_GET['text'] !== '') {
        $text = stripslashes($_GET['text']);
	    if (function_exists('mb_convert_encoding')) {
    	    $text = mb_convert_encoding($text, 'ISO-8859-1', 'UTF-8');
    	}
		$code_generated->parse($text);
    }
}
catch(Exception $exception) {
    $drawException = $exception;
}
$drawing = new BCGDrawing('', $color_white);
if($drawException) {
    $drawing->drawException($drawException);
}
else {
    $drawing->setBarcode($code_generated);
    $drawing->setRotationAngle(0);
    $drawing->setDPI(72);
    $drawing->draw();
}
header('Content-Type: image/jpeg');
$drawing->finish($filetypes['JPEG']);
?>