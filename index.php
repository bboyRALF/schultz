<?php
session_start ();
include("new.php");
error_reporting();
function show_form()
 
{$_SESSION['code'] = rand(1000, 9999);
  
// указываем параметры для подключения к MySQL


?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=cp1251" />


<head>
<title>
Регистрационная анкета
</title>
<link href="css/jquery.autocomplete.css" rel="stylesheet" type="text/css" />
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.autocomplete.pack.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    <form id="frm" action="" method="post"onclick="document.getElementById('frm')">
<link rel="Stylesheet" href="http://itkontur.ru/reg/ball/css/bootstrap.css" <style type-"text/css">
 
</head>
<body>




 
<div align="center">


<!-- создаем форму select для выбора областей -->
 
<table class="table table-hover" style="width:30%">
<tr bgcolor="#B0ADC3">
  <td>
     <b>Выбор района*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td>
 
 
  <input id="region" name = "region" type="text" autocomplete="off" onkeyup="document.getElementById('region')">
  <input type="submit" value="Применить">

 </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>Выбор СЦ*</b>
  </td>
</tr>
<?php
$host=''; // имя хоста
$database=''; // имя базы данных
$user=''; // заданное вами имя пользователя
$pswd=''; // заданный вами пароль
// подключаемся к MySQL
$dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
mysql_select_db($database) or die("Не могу подключиться к базе.");
mysql_set_charset('utf-8');
// выбираем столбец name из таблицы cms_prices_region
 
$res = mysql_query($query);
function sel_region($a)
{
$b = isset($_POST['region'])?$_POST['region']:NULL;
}
function sel_name($a)
{
$b = isset($_POST['name'])?$_POST['name']:NULL;

}

$query = "SELECT name FROM `rai_c` WHERE `region` like'".$_POST['region']."%'";
$res = mysql_query($query);
// выводим все строки из столбца name таблицы cms_prices_cs
 
echo " <tr><td><select name='name' >  <option value='null'>- Выберите СЦ-</option> ";
while($row= mysql_fetch_assoc($res)){
echo "<option ".sel_name($row['name'])." value='" . $row['name'] . "' >". $row['name'] . "</option>\r\n ";
 } 



?>

</table>

<h4> <font face="Tahoma" align="center">Информация о предприятии</font>  </h4> 
<table class="table table-hover" style="width:30%">
<tr bgcolor="#B0ADC3">
  <td>

     <b>Название организации (полное)*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[2]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][2])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>Название организации (краткое, строго в соответствии с выпиской ЕГРЮЛ)*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[3]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][3])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>Бюджетная организация*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="radio" name="input_name[4]" value="да"<?if(htmlspecialchars($_POST['input_name'][4]) == "да") echo ' CHECKED';?>>да<input type="radio" name="input_name[4]" value="нет"<?if(htmlspecialchars($_POST['input_name'][0]) == "нет") echo ' CHECKED';?>>нет<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>ИНН*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[5]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][5])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>КПП*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[6]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][6])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>ОГРН*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[7]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][7])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>Телефон организации (в формате 8(ХХХ)ХХХХХХХ )*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[8]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][8])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>факс организации (в формате 8(ХХХ)ХХХХХХХ )*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[9]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][9])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>

<tr bgcolor="#B0ADC3">
  <td>
     <b>Юридический адрес (адрес регистрации юр. лица)*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[12]" size="39"   style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>Фактический адрес*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[13]" size="39" value= style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>

<tr bgcolor="#B0ADC3">
  <td>
     <b>Расчетный счет*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[15]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][15])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>Корр. счет*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[16]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][16])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>Лицевой счет*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[17]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][17])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>Банк*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[18]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][18])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>БИК*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[19]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][19])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>E-mail*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[20]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][20])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
</table>
<h4> <font face="Tahoma" align="center">Информация о руководителе</font>  </h4> 
<table class="table table-hover" style="width:30%">
<tr bgcolor="#B0ADC3">
  <td>
     <b>Фамилия*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[21]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][21])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>Имя*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[22]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][22])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>Отчество*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[23]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][23])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>

<tr bgcolor="#B0ADC3">
  <td>
     <b>Должность*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[27]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][27])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>Действует на основании (Устава/Положения/Доверенности/Свидетельства и т.п.)*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[28]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][28])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>

</table>
<h4> <font face="Tahoma" align="center">Информация о владельце сертификата ЭЦП</font>  </h4>
<table class="table table-hover" style="width:30%">    
<tr bgcolor="#B0ADC3">
  <td> 
<b>Владелец ЭЦП руководитель*</b>

  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[29]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][29])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>Фамилия*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[30]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][30])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>Имя*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[31]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][31])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>Отчество*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[32]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][32])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>СНИЛС (в формате ХХХХХХХХХХХ, без пробелов и дефисов)*</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><input type="text" name="input_name[33]" size="39" value="<?=substr(htmlspecialchars(trim($_POST['input_name'][33])), 0, 500);?>" style="border: #000 1px solid; background-color: #fff;">
<input type="hidden" name="check[]" value="1">
  </td>
</tr>
<tr bgcolor="#B0ADC3">
  <td>
     <b>Комментарий</b>
  </td>
</tr>
<tr bgcolor="#ffffff">
  <td><textarea rows="10" cols="30" name="input_name[34]" style="border: #000 1px solid; background-color: #fff;scrollbar-dark-shadowcolor:#E7E8EB;scrollbar-light-shadow-color:#EFF3F4;scrollbar-base-color:#EFF3F4;scrollbar-arrow-color:#B0ADC3;scrollbar-face-color:#E7E8EB;scrollbar-shadow-color:#7D868D;scrollbar-3d-light-color:#EFF3F4;"><?=substr(htmlspecialchars(trim($_POST['input_name'][34])), 0, 10000);?></textarea>
<input type="hidden" name="check[]" value="2">
  </td>
</tr>
<tr bgcolor="#ffffff"><td>Код подтверждения:
<input type="text" id="code" name="code" size="4" maxlength="4">
<img align="absmiddle" src="captcha.php"></td></tr>
<tr>
<tr>
  <td bgcolor="#1F2760">
   <table width="100%">
    <tr><td align="left">
      </td><td align="right"><input type="submit" value="Отправить" style="background-color:#B0ADC3;border: #000 1px solid;" name="submit">
    </td></tr>
   </table>
  </td>
</tr>
</table>
<div align="center">* Помечены поля, которые необходимо заполнить</div>
</form>
</div>
</body>
</html>
?>