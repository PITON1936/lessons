<?php

session_start();
include('goods.php');

// 		foreach ($goods as $key => $good){
//     echo $good['title'];
//     echo ' ';
//     echo $good['price_val'];
//     echo "<a href=\"cart_add.php?buy_item=$key\"> Купить</a>";
//     echo '<br> ';
//}
	//var_dump($_SESSION['first']);
	
//     if(isset($_SESSION['first'])){
//     	$totalPrice;
//     foreach ($_SESSION['first'] as $key => $item){
//     	$currentPrice=$goods[$key]['price_val']*$item." ";
//         echo $goods[$key]['title']." ";
//         echo $currentPrice;
//         echo $item."<br>";
//         $totalPrice+=$currentPrice;
//     }
//     echo $totalPrice;
// }

?>

<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<div class="items" style="float:left; margin-right:10%;">
 	<?php
 		echo ("<table  border=\"1\" cellpadding=\"7\" style=\"border-collapse: collapse;\">
			<tr><td>Товар</td><td>Цена</td><td>Добавить в корзину</td></tr>");
 		foreach ($goods as $key => $good){
 			echo "<tr><td>".$good['title']."</td>";
 			echo "<td>".$good['price_val']."</td>";
 			echo "<td><a href=\"cart_add.php?buy_item=$key\"> Купить</a></td></tr>";
 		}
 	echo "</table>"
	?>
 	</div>
 	<div class="totalprice" style="float:right; margin-left:10%;">
 		<?php
 		if(isset($_SESSION['first'])){
 			echo ("<table  border=\"1\" cellpadding=\"7\" style=\"border-collapse: collapse;\">
			<tr><td>Товар</td><td>Сумма</td><td>Кол-во</td></tr>");
    	$totalPrice;
    foreach ($_SESSION['first'] as $key => $item){
    	$currentPrice=$goods[$key]['price_val']*$item." ";
    	echo "<tr><td>".$goods[$key]['title']."</td>";
    	echo "<td>".$currentPrice."</td>";
    	echo "<td>".$item."</td></tr>";
        $totalPrice+=$currentPrice;
        //финальная цена (сумма всех цен!)  =)
    	}
    	echo "<tr><td>Всего</td><td>".$totalPrice."</td><td> </td></tr>";
    	echo "</table>";
		}
		?>
 	</div>
 </body>
 </html>
