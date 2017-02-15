<?php
    session_start();

    if(!isset($_SESSION['first'])){
        $_SESSION['first']= array();
    }

	if (!isset($_SESSION['first'][$_GET['buy_item']])) {
	    $_SESSION['first'][$_GET['buy_item']] = 1;
	}elseif(isset($_SESSION['first'][$_GET['buy_item']])) {
	    $_SESSION['first'][$_GET['buy_item']] += 1;
	}
       echo "Товар добавлен в корзину";
       echo "<br>";
       echo "<a href=\"index.php\"> Вернуться к покупкам</a>";

//    if(isset ($_GET['buy_item'])){
//        array_push($_SESSION['first'],$_GET['buy_item']);
//        echo "Товар добавлен в корзину";
//        echo "<br>";
//        echo "<a href=\"index.php\"> Вернуться к покупкам</a>";
//    }




