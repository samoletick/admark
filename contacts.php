<?
if (isset ($_POST['messageFF'])) {
  mail ("help@admark.me",
        "Заполнена контактная форма с ".$_SERVER['HTTP_REFERER'],
        "Имя: ".$_POST['nameFF']."\nEmail: ".$_POST['contactFF']."\nСообщение: ".$_POST['messageFF']);
  echo ('<p style="color: green">Ваше сообщение получено, спасибо!</p>');
}
?>