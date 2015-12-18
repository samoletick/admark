<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Контактная форма'; 
        $to = 'help@admark.me'; 
        $subject = 'Обратная связь с сайта';
        
        $body = "От: $name\n E-Mail: $email\n Сообщение:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Введите ваше имя';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Введите ваш email';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Введите ваше сообщение';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Проверьте ответ на проверочный вопрос';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Спасибо большое! Мы обязательно вернемся к тебе с ответом</div>';
    } else {
        $result='<div class="alert alert-danger">Упс! Произошла ошибка. Попробуй чуть позже</div>';
    }
}
    }
?>