<?php

    
    use PHPImageWorkshop\ImageWorkshop;
    require_once 'autoload.php';

    $pathImage = __DIR__.'/images/pic_2.jpg';
    $layer = ImageWorkshop::initFromPath($pathImage);
   

    $text = "Hello. I'm Akai Shuichi, I come from Japan";
    $font = 3; // Internal font number (http://php.net/manual/fr/function.imagestring.php)
    $color = "ffffff";
    $positionX = 40;
    $positionY = 35;
    $align = "horizontal";
    $layer->writeText($text, $font, $color, $positionX, $positionY, $align);
    
    // Rotating
    $layer->rotate(30);


    $image = $layer->getResult("ffffff");
    header('Content-type: image/jpg');
    header('Content-Disposition: filename="butterfly.gif"');

    imagepng($image, null, 8);
  
?>