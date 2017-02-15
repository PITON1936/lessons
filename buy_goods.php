<?php
if (!isset($_COOKIE['id_goods'])) {
    setcookie('id_goods', $_GET['id'], time() + 3600 * 24 * 30);
} elseif (isset($_COOKIE['id_goods'])) {
    $views = explode(" ", $_COOKIE['id_goods']);

    if (!is_numeric(array_search($_GET['id'], $views))) {
        $_COOKIE['id_goods'] .= " " . $_GET['id'];
        setcookie('id_goods', $_COOKIE['id_goods']);
        if (count($views) == 4) {
            unset($views[0]);
            array_push($views, $_GET['id']);
            $_COOKIE['id_goods'] = implode(' ', $views);
            setcookie('id_goods', $_COOKIE['id_goods']);
        }
    }
}

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
    $sql = "SELECT `id`, `goods_name`, `price`, `description`, `links` FROM `goods` WHERE `id`=" . $_GET['id'];
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
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="description" content="Описание сайта">
    <meta name="keywords" content="Ключевые слова">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Выбор Товара</title>
</head>
<body>
<div class="jumbotron">
    <header><h1>Выбор товара</h1></header>
</div>
<div class="container-fluid">
    <?php
    foreach ($result as $row) {
        echo '<div>' . '<p>' . 'Название товара: ' . $row['goods_name'] . '</p>';
        echo '<p>' . 'Цена: ' . $row['price'] . '$' . '</p>';
        echo '<p>' . 'Информация: ' . $row['description'] . '</p>' . '</div>';
        echo '<div>' . '<img src=' . $row['links'] . '>' . '</div>';
        echo "<hr>";
        echo "<div class=\"btn-group\">";
        echo "<button name=\"backspc\" class=\"btn btn-default\"><a href=\"index.php\">На главную</a></button>";
        echo "<button name=\"button\" class=\"btn btn-default \"><a href=\"goods.php?id_goods=" . $row['id'] . " \">Оформить заказ</a></button>";
        echo "</div>";
        echo "<hr>";
    }
    ?>
</div>
<h2>Просмотренные товары</h2>
<div class="flex-container" id="views">
    <?php
    foreach ($views as $value) {
        $sql = "SELECT `id`, `goods_name`, `price`, `links` FROM `goods` WHERE `id`=$value";
        $check = $pdo->query($sql);
        foreach ($check as $recent) {
            echo '<div class="flex-item">' . '<img src=' . $recent['links'] . '>' . '</br>';
            echo '<p>' . 'Название: ' . $recent['goods_name'] . '</p>';
            echo '<p>' . 'Цена: ' . $recent['price'] . '$' . '</p>' . '</div>';
        }
    }
    ?>
</div>
</body>
<?php

