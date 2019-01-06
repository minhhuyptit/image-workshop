<?php

    
    use PHPImageWorkshop\ImageWorkshop;
    require_once 'autoload.php';

    $pathImage = __DIR__.'/images/main.png';
    $layer = ImageWorkshop::initFromPath($pathImage);
    
    //Croping
    $newWidth = 200; // px
    $newHeight = 100; // px
    $positionX = 0; // left translation of 30px
    $positionY = 0; // top translation of 20px
    $position = "LT";   //Left-Top ngoài ra còn có MT, RT, LM, MM,...
    $layer->cropInPixel($newWidth, $newHeight, $positionX, $positionY, $position);

     // Show Image
     $image = $layer->getResult("ffffff");
     header('Content-type: image/jpg');
     header('Content-Disposition: filename="butterfly.gif"');
     imagepng($image, null, 8);
  
?>