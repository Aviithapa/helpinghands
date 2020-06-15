<?php
/**
 * Created by yogesh on 20 02, 2018.
 * 
 * Class to handle the captcha security image and code generation.
 * <br>
 * To create the captcha and display the captcha image, call createCaptcha() from the src of the img tag.
 * <br>
 * To retrieve the code for the captcha call getCaptchaSecurityCode(). 
 * You may then add this code to the session for later verification.
 * 
 */
class CaptchaSecurityImages {

    var $font = 'Gotham-Book.otf';

    private $captchaSecurityCode = "";
    
    private $width = 120;
    private $height = 30;
    private $characters = 5;
    
    function __construct($width = '120',$height='30',$characters='5')
    {
        $this->width = $width;
        $this->height = $height;
        $this->characters = $characters;

    }

    /**
     * Creates a captcha image.
     * <br>
     * The image will be automatically flushed to the output 
     * with header set as 'Content-Type: image/jpeg';
     * 
     */
    function createCaptcha() {
        
        /* update font value to absolute directory structure to tackle any path inconsistencies */
        $this->font = __DIR__."/".$this->font;
        if($this->captchaSecurityCode == ""){
            $this->generateCode();
        }
        $code = $this->captchaSecurityCode;
        /* font size will be 75% of the image height */
        $font_size = $this->width * 0.11;
        $image = @imagecreate($this->width, $this->height) or die('Cannot initialize new GD image stream');
        
        /* set the colours */
        $background_color = imagecolorallocate($image, 67, 61, 61);
        $text_color = imagecolorallocate($image, 255, 255, 255);
        $noise_color = imagecolorallocate($image, 0, 0, 0);
        
        /*
        $background_color = imagecolorallocate($image, 255, 255, 255);
        $text_color = imagecolorallocate($image, 106, 106, 106);
        $noise_color = imagecolorallocate($image, 200, 200, 200);
        */
        /* generate random dots in background */
        for( $i=0; $i<($this->width*$this->height)/3; $i++ ) {
            imagefilledellipse($image, mt_rand(0,$this->width), 
                mt_rand(0,$this->height), 1, 1, $noise_color);
        }
        /* generate random lines in background */
        for( $i=0; $i<($this->width*$this->height)/150; $i++ ) {
            imageline($image, mt_rand(0,$this->width), mt_rand(0,$this->height), 
                mt_rand(0,$this->width), mt_rand(0,$this->height), $noise_color);
        }

        /* create textbox and add text */
        $textbox = imagettfbbox($font_size, 0,$this->font, $code) or die('Error in imagettfbbox function');
        $x = ($this->width - $textbox[4])/2;
        $y = ($this->height - $textbox[5])/2;
        imagettftext($image, $font_size, 0, $x, $y, $text_color,$this->font , $code) or die('Error in imagettftext function');

        /* output captcha image to browser */
        header('Content-Type: image/jpeg');
        imagejpeg($image);
        imagedestroy($image);
    }

    /**
     * Generates the code to be used in the captcha.
     * 
     * @return string
     */
    public function generateCode() {
        /* list all possible characters, similar looking characters and vowels have been removed */
        $possible = '23456789bcdfghjkmnpqrstvwxyz';
        $code = '';
        $i = 0;
        while ($i < $this->characters) {
            $code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
            $i++;
        }

        $this->captchaSecurityCode = $code;

        return $this->captchaSecurityCode;
    }

    /**
     * Returns the generated captcha security code.
     * 
     * @return string
     */
    public function getCaptchaSecurityCode()
    {
        return $this->captchaSecurityCode;
    }

}
