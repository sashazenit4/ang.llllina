<?php
require_once '/home/clients/alexmt2__ftp0/php-extensions/vendor/autoload.php/';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.yandex.ru', 465))
  ->setUsername('ang.llllina@mail.ru')
  ->setPassword('fugumo40')
  ->setEncryption('SSL')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);
?>