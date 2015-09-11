<?php
//prueba de simpleimage

require_once ('SimpleImage.php');

$image = new SimpleImage();
$image->load('2.JPG');
if($image->get_height() > 400)
{
    $image->fit_to_height(400);
    $image->save('picture2.jpg');
}
$image->load('picture2.jpg');
if($image->get_width() > 400)
{
    $image->fit_to_width(400);
    $image->save('picture2.jpg');
} 
   

   echo 'todo joya man';

 ?>