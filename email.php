<?php

require 'email.php'; // Підключаємо бібліотеку SendGrid

$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY')); // Створюємо екземпляр класу SendGrid з використанням API-ключа
$email = new \SendGrid\Mail\Mail(); // Створюємо об'єкт листа

$email->setFrom("worksearch8888@seznam.cz", "Example User"); // Встановлюємо адресу відправника
$email->setSubject("Тестовий лист"); // Встановлюємо тему листа
$email->addTo("worksearch8888@seznam.cz", "Recipient Name"); // Встановлюємо адресу отримувача
$email->addContent("text/plain", "Привіт!"); // Встановлюємо текст повідомлення

$sendgrid->send($email); // Відправляємо лист за допомогою API SendGrid

?>
