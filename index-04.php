<?php

    
    use PHPImageWorkshop\ImageWorkshop;
    require_once 'autoload.php';

    $pathImage = __DIR__.'/images/pic_2.jpg';
    $layer = ImageWorkshop::initFromPath($pathImage);
    

    // Config Save
    $dirPath = __DIR__."/output";
    $createFolders = true;  //true là nếu chưa có thư mục thì sẽ tự tạo
    $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
    $imageQuality = 95; // useless for GIF, usefull for PNG and JPEG (0 to 100%)

    //Filter
    $layer->applyFilter(IMG_FILTER_NEGATE);
    $layer->save($dirPath, '1.png', $createFolders, $backgroundColor, $imageQuality);

    $layer = ImageWorkshop::initFromPath($pathImage);
    $layer->applyFilter(IMG_FILTER_GRAYSCALE);
    $layer->save($dirPath, '2.png', $createFolders, $backgroundColor, $imageQuality);

    $layer = ImageWorkshop::initFromPath($pathImage);
    $layer->applyFilter(200, IMG_FILTER_BRIGHTNESS);
    $layer->save($dirPath, '3.png', $createFolders, $backgroundColor, $imageQuality);

    $layer = ImageWorkshop::initFromPath($pathImage);
    $layer->applyFilter(255, IMG_FILTER_CONTRAST);
    $layer->save($dirPath, '4.png', $createFolders, $backgroundColor, $imageQuality);

    $layer = ImageWorkshop::initFromPath($pathImage);
    $layer->applyFilter(IMG_FILTER_EDGEDETECT);
    $layer->save($dirPath, '5.png', $createFolders, $backgroundColor, $imageQuality);

    $layer = ImageWorkshop::initFromPath($pathImage);
    $layer->applyFilter(IMG_FILTER_EMBOSS);
    $layer->save($dirPath, '6.png', $createFolders, $backgroundColor, $imageQuality);

    $layer = ImageWorkshop::initFromPath($pathImage);
    $layer->applyFilter(IMG_FILTER_GAUSSIAN_BLUR);
    $layer->save($dirPath, '7.png', $createFolders, $backgroundColor, $imageQuality);

    $layer = ImageWorkshop::initFromPath($pathImage);
    $layer->applyFilter(IMG_FILTER_SELECTIVE_BLUR);
    $layer->save($dirPath, '8.png', $createFolders, $backgroundColor, $imageQuality);

    $layer = ImageWorkshop::initFromPath($pathImage);
    $layer->applyFilter(IMG_FILTER_MEAN_REMOVAL);
    $layer->save($dirPath, '9.png', $createFolders, $backgroundColor, $imageQuality);

    $layer = ImageWorkshop::initFromPath($pathImage);
    $layer->applyFilter(128, IMG_FILTER_SMOOTH);
    $layer->save($dirPath, '10.png', $createFolders, $backgroundColor, $imageQuality);
  
    $layer = ImageWorkshop::initFromPath($pathImage);
    $layer->applyFilter(255, IMG_FILTER_PIXELATE);
    $layer->save($dirPath, '11.png', $createFolders, $backgroundColor, $imageQuality);
  
  
?>
<div style="text-align:center">
    <h3 style="color:red">ORIGIN IMAGE</h3>
    <img width=500 src="images/pic_2.jpg" alt="">
</div>

<div style="text-align:center; float:left">
    <h3 style="color:red">IMG_FILTER_NEGATE</h3>
    <img width=300 src="output/1.png" alt="">
</div>
<div style="text-align:center; float:left">
    <h3 style="color:red">IMG_FILTER_GRAYSCALE</h3>
    <img width=300 src="output/2.png" alt="">
</div>
<div style="text-align:center; float:left">
    <h3 style="color:red">IMG_FILTER_BRIGHTNESS</h3>
    <img width=300 src="output/3.png" alt="">
</div>
<div style="text-align:center; float:left">
    <h3 style="color:red">IMG_FILTER_CONTRAST</h3>
    <img width=300 src="output/4.png" alt="">
</div>
<div style="text-align:center; float:left">
    <h3 style="color:red">IMG_FILTER_EDGEDETECT</h3>
    <img width=300 src="output/5.png" alt="">
</div>
<div style="text-align:center; float:left">
    <h3 style="color:red">IMG_FILTER_EMBOSS</h3>
    <img width=300 src="output/6.png" alt="">
</div>
<div style="text-align:center; float:left">
    <h3 style="color:red">IMG_FILTER_GAUSSIAN_BLUR</h3>
    <img width=300 src="output/7.png" alt="">
</div>
<div style="text-align:center; float:left">
    <h3 style="color:red">IMG_FILTER_SELECTIVE_BLUR</h3>
    <img width=300 src="output/8.png" alt="">
</div>
<div style="text-align:center; float:left">
    <h3 style="color:red">IMG_FILTER_MEAN_REMOVAL</h3>
    <img width=300 src="output/9.png" alt="">
</div>
<div style="text-align:center; float:left">
    <h3 style="color:red">IMG_FILTER_SMOOTH</h3>
    <img width=300 src="output/10.png" alt="">
</div>
<div style="text-align:center; float:left">
    <h3 style="color:red">IMG_FILTER_PIXELATE</h3>
    <img width=300 src="output/11.png" alt="">
</div>