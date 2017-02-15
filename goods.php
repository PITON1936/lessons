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
$goods_id = $_GET['id_goods'];
if (isset($_POST['button'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $id_goods = $_POST['id_goods'];
    $amount = $_POST['amount'];


    try {
        $sql = "INSERT INTO orders(`name`, `phone`, `email`, `id_goods`, `amount`) VALUES ('$name', '$phone', 
        '$email', '$id_goods', '$amount')";
        $pdo->exec($sql);
    } catch (PDOException $e) {
        echo $id_goods;
        echo "Ошибка при заполнении БД";
        echo $e->getMessage();
        exit();
    }
}
try {
    $sql = "SELECT 'links' FROM goods WHERE ('id'='$goods_id')";
    $result = $pdo->exec($sql);
} catch (PDOException $e) {
    echo "Ошибка извлечения из БД";
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
    <title>Оформление заказа</title>
</head>
<body>
<div class="jumbotron">
    <header><h1>Оформление заказа</h1></header>
</div>
<div class="container-fluid">
    <div class="form-group">
        <form action="goods.php" method="post">
            <label for="name">Введите ваше имя</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Введите ваше имя">
            <label for="phone">Ваш телефон</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Ваш телефон">
            <label for="email">Ваш Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Ваш Email">
            <?php echo "<input type=\"hidden\" name=\"id_goods\" value=$goods_id>"; ?> <br>
            <label for="amount">Кол-во товара</label>
            <select name="amount" id="amount" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <br>
            <div class="btn-group">
                <button name="offer" class="btn btn-default"><a href="#">Заказать</a></button>
                <button name="backspc" class="btn btn-default"><a href="index.php">На главную</a></button>
            </div>
        </form>
    </div>
</div>

</body>
</html>