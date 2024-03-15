<?php
// Устанавливаем cookie с именем "username" и значением "user123" на 1 час
setcookie('username', 'user123', time() + 3600);

// Выводим сообщение об успешной установке cookie
echo "Cookie 'username' установлено.";
?>