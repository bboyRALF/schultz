
<?php
function complete_mail() {

        if (empty($_POST['code']) or empty($_SESSION['code'])) {
            echo '<br><b>Вы не указали код подтверждения</b>';
            $sendemail = 'No';
        } elseif ($_POST['code'] != $_SESSION['code']) {
            echo '<br><b>Код подтверждения не совпадает</b>';
            $sendemail = 'No';
        }
 
        if($sendemail == 'No') show_form();
        $mess = '';
$mess .= '<b>Выбор района: </b>'.$_POST['input_name']['region'].'<br />';
$mess .= '<b>Выбор СЦ: </b>'.$_POST['input_name']['name'].'<br />';
$mess .= '<b>Название организации (полное): </b>'.$_POST['input_name'][2].'<br />';
$mess .= '<b>Название организации (краткое, строго в соответствии с выпиской ЕГРЮЛ): </b>'.$_POST['input_name'][3].'<br />';
$mess .= '<b>Бюджетная организация: </b><br />';


$mess .= '<b>ИНН: </b>'.$_POST['input_name'][5].'<br />';
$mess .= '<b>КПП: </b>'.$_POST['input_name'][6].'<br />';
$mess .= '<b>ОГРН: </b>'.$_POST['input_name'][7].'<br />';
$mess .= '<b>Телефон организации (в формате 8(ХХХ)ХХХХХХХ ): </b>'.$_POST['input_name'][8].'<br />';
$mess .= '<b>факс организации (в формате 8(ХХХ)ХХХХХХХ ): </b>'.$_POST['input_name'][9].'<br />';
$mess .= '<b>ФИО и телефон контактного лица (в формате 8(ХХХ)ХХХХХХХ ): </b>'.$_POST['input_name'][10].'<br />';
$mess .= '<b>Юридический адрес (адрес регистрации юр. лица): </b>'.$_POST['input_name'][12].'<br />';
$mess .= '<b>Фактический адрес: </b>'.$_POST['input_name'][13].'<br />';
$mess .= '<b>Расчетный счет: </b>'.$_POST['input_name'][15].'<br />';
$mess .= '<b>Корр. счет: </b>'.$_POST['input_name'][16].'<br />';

$mess .= '<b>Лицевой счет: </b>'.$_POST['input_name'][17].'<br />';
$mess .= '<b>Банк: </b>'.$_POST['input_name'][18].'<br />';
$mess .= '<b>БИК: </b>'.$_POST['input_name'][19].'<br />';
$mess .= '<b>E-mail: </b>'.$_POST['input_name'][20].'<br />';
$mess .= '<b>Фамилия: </b>'.$_POST['input_name'][21].'<br />';
$mess .= '<b>Имя: </b>'.$_POST['input_name'][22].'<br />';
$mess .= '<b>Отчество: </b>'.$_POST['input_name'][23].'<br />';
$mess .= '<b>Должность: </b>'.$_POST['input_name'][27].'<br />';
$mess .= '<b>Действует на основании (Устава/Положения/Доверенности/Свидетельства и т.п.): </b>'.$_POST['input_name'][28].'<br />';
$mess .= '<b>Владелец ЭЦП руководитель: </b>'.$_POST['input_name'][29].'<br />';
$mess .= '<b>Фамилия: </b>'.$_POST['input_name'][30].'<br />';
$mess .= '<b>Имя: </b>'.$_POST['input_name'][31].'<br />';
$mess .= '<b>Отчество: </b>'.$_POST['input_name'][32].'<br />';
$mess .= '<b>СНИЛС (в формате ХХХХХХХХХХХ, без пробелов и дефисов): </b>'.$_POST['input_name'][33].'<br />';
$mess .= '<b>Комментарий: </b>'.$_POST['input_name'][34].'<br />';

        require 'class.phpmailer.php';

        $mail = new PHPMailer();
        $mail->From = '';      // от кого email
        $mail->FromName = '';   // от кого имя
        $mail->AddAddress('bush88@inbox.ru', 'bush88@inbox.ru'); // кому - адрес, Имя
        $mail->IsHTML(true);        // выставляем формат письма HTML
        $mail->Subject = 'Регистрационная анкета';  // тема письма
        $mail->Body = $mess;

        

        if($sendemail != 'No'){
              // отправляем наше письмо
              if (!$mail->Send()) die ('Mailer Error: '.$mail->ErrorInfo);
              echo 'Спасибо! Ваше письмо отправлено.';
        }
}
if (!empty($_POST['submit'])) complete_mail();
else show_form(); 
?>