<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем email из формы
    $to = $_POST['email'];
    
    // Тема письма
    $subject = "Подтверждение подписки";
    
    // Текст сообщения
    $message = "
    <html>
    <head>
        <title>Спасибо за подписку</title>
    </head>
    <body>
        <h1>Спасибо за подписку на новости КОКОС GROUP!</h1>
        <p>Теперь вы будете первым получать самые свежие новости.</p>
    </body>
    </html>";
    
    // Заголовки письма
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // Дополнительные заголовки
    $headers .= 'From: no-reply@yourwebsite.com' . "\r\n"; // Укажи email отправителя
    
    // Отправляем email
    if (mail($to, $subject, $message, $headers)) {
        echo "Сообщение успешно отправлено на $to";
    } else {
        echo "Ошибка при отправке сообщения";
    }
}
?>
