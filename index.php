<!doctype html>
<html lang="ru">

<meta charset="utf-8">
<title>Лабораторная работа № 23</title>

<form action="script.php" method="post">
    <div>
        <label for="text">Текст:</label>
    </div>
    <textarea id="text" name="text"></textarea>
    <div>
        <button type="submit">Сохранить</button>
    </div>
    <p>
        Файл:
        <?php 
        
        try {
            $stream = fopen('text.txt', 'rb');
            $text = fread($stream, filesize('text.txt'));
            fclose($stream);
            echo $text;
        } catch (ValueError $e) {
            echo 'Пусто...';
        }

        ?>
    </p>
</form>