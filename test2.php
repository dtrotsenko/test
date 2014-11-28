<?

$fullpath = 'img/img17.jpg';
$writeTo  = 'res2.jpg';

$width  = 640;
$height = 480;



$thumb = new Imagick($fullpath);


//делаем превью, размер меньше, чем у фона, чтобы было куда впихнуть тень
$thumb->thumbnailImage($width, $height);
 

 
//записываем картинку
$thumb->writeImage($writeTo);
//подчищаем за собой
$thumb->destroy();


?>