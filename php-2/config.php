<?php

try {
    $conn = new PDO('mysql:dbname=yokubo_sushi;host=localhost', 'root', 'root');
} catch (PDOException $exception) {
    exit($exception->getMessage());

}

?>
