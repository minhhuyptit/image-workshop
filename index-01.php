<?php

    // Show Image
    use PHPImageWorkshop\ImageWorkshop;
    require_once 'autoload.php';

    $pathImage = __DIR__.'/images/pic_1.jpg';
    $layer = ImageWorkshop::initFromPath($pathImage);

    $image = $layer->getResult("ffffff");
    header('Content-type: image/jpg');
    header('Content-Disposition: filename="butterfly.gif"');

    imagepng($image, null, 8);
  
?>