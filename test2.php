<?

$fullpath = 'img/img17.jpg';
$writeTo  = 'res2.jpg';

$width  = 640;
$height = 480;



$thumb = new Imagick($fullpath);


//������ ������, ������ ������, ��� � ����, ����� ���� ���� �������� ����
$thumb->thumbnailImage($width, $height);
 

 
//���������� ��������
$thumb->writeImage($writeTo);
//��������� �� �����
$thumb->destroy();


?>