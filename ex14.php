<?php

//File name: ex14.php
//Student: Nate Canney



$img=imagecreate(400, 400);
$white=imagecolorallocate($img, 255, 255, 255);
$red=imagecolorallocate($img, 255, 0, 0);

$plot=array (
                    200, 10,  //2
                    250, 125, //3
                    390, 200, //4
                    250, 275, //5
                    200, 390, //6
                    150, 275,  //
                    10, 200,  //1
                    150, 125  //
);

imagepolygon($img, $plot, 8, $red);



header("Content-type: image/png");

imagepng($img);
imagedestroy($img);
echo $plot

?>

