<?php 

/* https://api.telegram.org/bot1054285544:AAEev0DaeQOpjpmm1J_JbPAq4olU1XX30qI/getUpdates
*/

/* require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
*/

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "1054285544:AAEev0DaeQOpjpmm1J_JbPAq4olU1XX30qI";
$chat_id="-358584827";

$arr = array(
    'Имя пользователя' => $name,
    'Телефона' => $phone
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."<b> ".$value."%0A"
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}
&parse_mode=html&text={$txt}", "r");

if($sendToTelegram) {
    header('location: thank-you.html');
} else {
    echo 'Error';
}

/*
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'otter.salon@bk.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'abcd123'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('otter.salon@bk.ru'); // от кого будет уходить письмо?
$mail->addAddress('otterclients@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка на обратный звонок с сайта';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone; 
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>
*/