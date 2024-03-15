<?php
if(isset($_POST['email'])) {
    $to = $_POST['email'];
    $subject = 'Подписка на рассылку';
    $message = 'Вы успешно подписались на нашу рассылку!';
    $headers = 'From: your_email@example.com' . "\r\n" .
        'Reply-To: your_email@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    echo 'Письмо с подтверждением подписки отправлено на ваш email.';
}
?>

<form method="post">
    <input type="email" name="email" placeholder="Введите ваш email" required>
    <input type="submit" value="Подписаться">
</form>
