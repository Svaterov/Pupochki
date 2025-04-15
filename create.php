<?php
$dbName = 'novels.db';

try {
    $db = new PDO("sqilte:$dbName");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $createTabQuery = "
    CREATE TABLE IF NOT EXISTS novels (
    id INTEGER PRIMARY KEY AUTONCREMENT,
    title TEXT NOT NULL,
    autor TEXT NOT NULL,
    url TEXT NOT NULL INQURE,
    last_updated DATETIME DEFAUT CURRENT_TIMESAMP
    );";

    $db->exec($createTableQuery);
    echo "База данных и таблица успешно созданны!";
} catch (PDOException $e) {
    echo "Ошибка: " . $e->getMessage();
}

$db = null;
?>