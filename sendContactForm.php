
<?php
session_start();
if (isset($_POST['name'])) {
	$_SESSION['name'] = strip_tags($_POST['name']);
	$_SESSION['email'] = strip_tags($_POST['email']);
	$_SESSION['message'] = strip_tags($_POST['message']);	

}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$email=	filter_var($email, FILTER_SANITIZE_EMAIL);


//メール送信その1

//メール送信先
$A="yukkuprog@gmail.com";

//メールの件名
$B="ポートフォリオサイトからのお問い合わせ";

//メールの本文
$C="以下のお問い合わせがありました。\n";
$C.= "【氏名】".$name."\n";//ピリオドは「連結」の意味
$C.= "【メールアドレス】".$email."\n";
$C.= "【内容】"."\n".$message."\n";


//オプション（送信元）
$D ="From:".$email;

//管理者あてのメール送信
mb_send_mail($A,$B,$C,$D);

$subject = $name;
// To send HTML mail, the Content-type header must be set.
$headers = 'MIME-Version: 1.0'."rn";
$headers .= 'Content-type: text/html; charset=UTF-8' . "rn";
$headers .= 'From:'.$email. "rn"; // Sender's Email
$headers .= 'Cc:'.$email. "rn"; // Carbon copy to Sender
$template = '<div style="padding:50px; color:white;">Hello '.$name.',<br/>'
.'<br/>Thank you...! For Contacting Us.<br/><br/>'
.'Name:'.$name.'<br/>'
.'Email:'.$email.'<br/>'
.'Message:'.$message.'<br/><br/>'
.'This is a Contact Confirmation mail.'
.'<br/>'
.'We Will contact You as soon as possible .</div>';
$sendmessage = '<div style="background-color:#7E7E7E; color:white;">'.$template."</div>";
// Message lines should not exceed 70 characters (PHP rule), so wrap it.
$sendmessage = wordwrap($sendmessage, 70);
// Send mail by PHP Mail Function.
mb_send_mail("receiver_email_id@abc.com", $subject, $sendmessage, $headers);

//全てが終わったらセッションを閉じる
session_destroy();
exit();
?>

