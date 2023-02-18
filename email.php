<?php

require 'email.php'; // Підключаємо бібліотеку SendGrid

$sendgrid = new \SendGrid(getenv('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')); // Створюємо екземпляр класу SendGrid з використанням API-ключа
$email = new \SendGrid\Mail\Mail(); // Створюємо об'єкт листа

$email->setFrom("example@example.com", "Example User"); // Встановлюємо адресу відправника
$email->setSubject("Тестовий лист"); // Встановлюємо тему листа
$email->addTo("worksearch8888@seznam.cz", "Recipient Name"); // Встановлюємо адресу отримувача
$email->addContent("text/plain", "Привіт!"); // Встановлюємо текст повідомлення

$sendgrid->send($email); // Відправляємо лист за допомогою API SendGrid

?>
