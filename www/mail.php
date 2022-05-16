<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['tel'])) {$tel = $_POST['tel'];}
if (isset($_POST['mail'])) {$mail = $_POST['mail'];}
if (isset($_POST['message'])) {$message = trim($_POST['message']);}
mail("ang.llllina@mail.ru", "Заявка с сайта angllllina.ru", "{$name}, {$tel}, {$mail}, {$message}");
header("Location: http://www.angllllina.ru");
