<?php
//�����ļ�
require ("phpqrcode.php");
//���������
$errorLevel = "L";
//��������ͼƬ��Ⱥ͸߶�;Ĭ��Ϊ3
$size = "4";
//������������
$content="�������ң����Ժ���";
//����QRcode��ľ�̬����png���ɶ�ά��ͼƬ
QRcode::png($content, false, $errorLevel, $size);
?>
