<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=goods_db', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
} catch (PDOException $e) {
    echo 'Не удалось подключиться к БД<br>';
    echo $e->getMessage();
    exit();
}

try {
    $sql = 'SELECT * FROM goods';
    $result = $pdo->query($sql);
} catch (PDOException $e) {
    echo "Ошибка извлечения";
    echo $e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="description" content="Описание сайта">
    <meta name="keywords" content="Ключевые слова">

    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Товары из Китая</title>
</head>
<body>
<div class="jumbotron">
    <h1>Заказ товаров из Китая</h1>
</div>
<div class="container-fluid">
    <?php foreach ($result as $row) {
        echo "<a href=buy_goods.php?id=" . $row['id'] . ">Название товара: " . $row['goods_name'] . "</a></br>";
        echo 'Price: ' . $row['price'] . '$' . '<br>';
        echo 'Information: ' . $row['description'] . '<br>';
        echo '<div>' . '<img src=' . $row['links'] . '>' . '</div>';
        echo "<hr>";
    }
    ?>
</div>
</body>
</html>