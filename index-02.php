<?php

    // Save Image
    use PHPImageWorkshop\ImageWorkshop;
    require_once 'autoload.php';

    $pathImage = __DIR__.'/images/pic_1.jpg';
    $layer = ImageWorkshop::initFromPath($pathImage);

    $dirPath = __DIR__."/output";
    $filename = "card.png"; 
    $createFolders = true;  //true là nếu chưa có thư mục thì sẽ tự tạo
    $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
    $imageQuality = 95; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
    
    $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);

  
?>