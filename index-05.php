<?php

    
    use PHPImageWorkshop\ImageWorkshop;
    require_once 'autoload.php';

    $pathImage = __DIR__.'/images/pic_2.jpg';
    $layer = ImageWorkshop::initFromPath($pathImage);
    
    //Horizontal Vertical Flip
    $layer->flip('vertical');   
    $layer->opacity(40);
    // $layer->opacity($newOpacity);

    $thumbWidth = 250; // px
    $thumbHeight = null;
    $conserveProportion = true; //true là nếu null thì là auto
    $positionX = 0; // px
    $positionY = 0; // px
    $position = 'MM';
    $layer->resizeInPixel($thumbWidth, $thumbHeight, $conserveProportion, $positionX, $positionY, $position);


    $image = $layer->getResult("ffffff");
    header('Content-type: image/jpg');
    header('Content-Disposition: filename="butterfly.gif"');

    imagepng($image, null, 8);
  
?>
<!-- <div style="text-align:center">
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
</div> -->