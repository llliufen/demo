<?php
	require_once ("email.class.php");
	$smtpserver = "smtp.163.com";   //SMTP������
	$smtpserverport =25;  //SMTP�������˿�
	$smtpusermail = "rg2013520@163.com";  //SMTP���������û�����
	$smtpemailto = "946856623@qq.com";  //���͸�˭
	$smtpuser = "rg2013520"; //SMTP���������û��ʺ�
	$smtppass = "rg123456789"; //SMTP���������û�����
	$mailtitle = "���Է���"; //�ʼ�����
	$mailcontent = "��������"; //�ʼ�����
	$mailtype = "TXT"; //TXTΪ�ı��ʼ�
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//�������һ��true�Ǳ�ʾʹ�������֤,����ʹ�������֤.
	$smtp->debug = false; //�Ƿ���ʾ���͵ĵ�����Ϣ
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);

	if($state==""){
		echo "�Բ����ʼ�����ʧ�ܣ�����������д�Ƿ�����";
		exit();
	}
	echo "��ϲ���ʼ����ͳɹ�����";
?>