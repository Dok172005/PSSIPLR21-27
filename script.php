<?php

$text = $_POST['text'];

$stream = fopen('text.txt', 'wb');
fwrite($stream, $text);
fclose($stream);

header('Location: /');