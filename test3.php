<?

$fullpath = 'img/resized.jpg';
$writeTo  = 'res3.jpg';

$width  = 640;
$height = 480;



$thumb = new Imagick($fullpath);


//������ ������, ������ ������, ��� � ����, ����� ���� ���� �������� ����
$thumb->thumbnailImage($width, $height);
 
$thumb->sharpenImage(4, 1);        


 
//���������� ��������
$thumb->writeImage($writeTo);
//��������� �� �����
$thumb->destroy();


?>