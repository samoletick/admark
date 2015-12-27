<?
header("Content-Type: text/html; charset=utf-8");
if (isset ($_POST['message'])) {
  mail ("askar@admark.me",
        "Заполнена контактная форма с ".$_SERVER['HTTP_REFERER'],
        "Имя: ".$_POST['name']."\nEmail: ".$_POST['email']."\nСообщение: ".$_POST['message']);
  echo ('<p style="color: green">Ваше сообщение получено, спасибо!</p>');
}
?>