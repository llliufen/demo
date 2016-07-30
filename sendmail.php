<?php
	require_once ("email.class.php");
	$smtpserver = "smtp.163.com";   //SMTP服务器
	$smtpserverport =25;  //SMTP服务器端口
	$smtpusermail = "rg2013520@163.com";  //SMTP服务器的用户邮箱
	$smtpemailto = "946856623@qq.com";  //发送给谁
	$smtpuser = "rg2013520"; //SMTP服务器的用户帐号
	$smtppass = "rg123456789"; //SMTP服务器的用户密码
	$mailtitle = "测试发送"; //邮件主题
	$mailcontent = "我是刘芬"; //邮件内容
	$mailtype = "TXT"; //TXT为文本邮件
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = false; //是否显示发送的调试信息
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);

	if($state==""){
		echo "对不起，邮件发送失败！请检查邮箱填写是否有误。";
		exit();
	}
	echo "恭喜！邮件发送成功！！";
?>