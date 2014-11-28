<?

$fullpath = 'img/img16.jpg';
$writeTo  = 'res.jpg';

$width  = 640;
$height = 480;



$thumb = new Imagick($fullpath);


//делаем превью, размер меньше, чем у фона, чтобы было куда впихнуть тень
$thumb->thumbnailImage($width, $height);
 
$thumb->sharpenImage(4, 1);        


 
//записываем картинку
$thumb->writeImage($writeTo);
//подчищаем за собой
$thumb->destroy();


?>