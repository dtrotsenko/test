<?

$fullpath = 'img/img16.jpg';
$writeTo  = 'res.jpg';

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