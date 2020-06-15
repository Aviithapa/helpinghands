<?php
/**
 * Created by yogesh on 14th 12, 2017.
 * 
 */

$code = "BCGcode128";
require_once __DIR__.'/class/BCGColor.php';
require_once __DIR__.'/class/BCGBarcode.php';
require_once __DIR__.'/class/BCGDrawing.php';
include_once __DIR__.'/class/BCGcode128.barcode.php';

/**
 * Class BarCodeGenerator
 * 
 * The middleware layer between our application logic and bcg library to generate the bar code.
 */
class BarCodeGenerator
{

    /**
     * Generates the barcode for the supplied barcode string.
     * 
     * @param $barcode
     * @throws BCGDrawException
     */
    static function generate($barcode){

        $filetypes = array('PNG' => BCGDrawing::IMG_FORMAT_PNG, 'JPEG' => BCGDrawing::IMG_FORMAT_JPEG, 'GIF' => BCGDrawing::IMG_FORMAT_GIF);
        $drawException = null;
        $code_generated = null;
        
        $color_black = new BCGColor(0, 0, 0);
        $color_white = new BCGColor(255, 255, 255);
        try{
            
            $code_generated = new BCGcode128();
            $code_generated->setThickness(30);
            $code_generated->setFont(0);
            $code_generated->setScale(3);
            $code_generated->setBackgroundColor($color_white);
            $code_generated->setForegroundColor($color_black);

            if ($barcode !== '') {
                $text = stripslashes($barcode);
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
    }

}