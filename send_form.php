<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $to = "evgeniy0096@icloud.com"; // Замените на ваш электронный адрес
    $subject = "Новое сообщение с вашего сайта";
    $body = "Имя: $name\nEmail: $email\nТелефон: $phone\n\nСообщение:\n$message";
    
    if (mail($to, $subject, $body)) {
        echo "Ваше сообщение успешно отправлено./brУчитель свяжется с вами в ближайшее время";
    } else {
        echo "При отправке сообщения произошла ошибка.";
    }
}
?>