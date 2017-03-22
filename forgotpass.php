<?php
include("config.php");
require("class.smtp.php");
require("class.phpmailer.php");
error_reporting(0);
$mail = new PHPMailer();
$mail->IsSMTP(); 
//$mail-> IsSendmail();
$mail->Host = "10.100.1.123"; 
//$mail->AddEmbeddedImage('/opt/lampp/htdocs/helpdesk/meter-reading/mail/KGisl.png', 'KGisl','KGisl.png');
	if(isset($_GET['id']))
	{
	$id=$_GET['id'];
	$query1=mysql_query("select * from reg_table where id='$id'");
	$row1=mysql_fetch_array($query1);
	
$contends = $row1['password'];
//$contends .= 'Mail Function';
						$mail->IsHTML(true);  
		$mail->From = "vidhyaramasamy13@gmail.com";
		$mail->FromName = "Vidhya R";  								
		$mail->Subject = "Mail";
		$mail->Body = $contends;
		//$mail->AddAddress($tomail);
	
		$query=mysql_query("select * from mailto");
		while($row=mysql_fetch_array($query))
		{
		$mail->AddAddress($row['mailid']);
		}
		//$mail->AddAddress('muthukumar.krishnasamy@kggroup.com');
		//$mail->AddAddress('gururaj.krishnamoorthy@kggroup.com');
		//$mail->AddAddress('sharmila.sesachalam@kggroup.com');
		
		//$mail->AddBCC('ias-web@kggroup.com');		
		//$mail->AddCC('fayas.s@kggroup.com');
		$mail->WordWrap = 50;			
		if($mail->Send())
		{
			echo "mail sent";
		}
		else
		{
			echo "fail";
		}			
	
	
	}
	$contends = '';

?>