<?php
// Начинаем сессию
session_start();

// Пароль администратора
$admin_password = '12345';

// Проверяем, была ли отправлена форма с паролем
if(isset($_POST['password'])) {
    // Если пароль совпадает с паролем администратора, устанавливаем флаг авторизации в сессию
    if($_POST['password'] == $admin_password) {
        $_SESSION['admin'] = true;
        echo "Вы успешно авторизованы как администратор.";
    } else {
        echo "Неверный пароль.";
    }
}

// Если администратор авторизован, отображаем блок администратора
if(isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
    echo "<h2>Блок администратора</h2>";
    echo "<p>Содержимое блока администратора...</p>";
} else {
    // Если администратор не авторизован, отображаем форму для ввода пароля
    echo "<h2>Авторизация</h2>";
    echo "<form method='post'>";
    echo "Введите пароль: <input type='password' name='password'><br>";
    echo "<input type='submit' value='Войти'>";
    echo "</form>";
}
?>