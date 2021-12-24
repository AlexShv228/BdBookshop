<?php include("includes/header.php"); ?>
<?php
mysqli_connect("localhost", "root", "1111") or die ("Невозможно подключиться к серверу");
mysqli_select_db($con, "shop1") or die ("Базы данных нет");
$rows = mysqli_query($con, "SELECT id_order, id_book, paid FROM `order1`");
while ($stroka = mysqli_fetch_array($rows)){
    echo"\n";
    echo"Код заказа" . "<br>";
    echo"\n" . $stroka['id_order'] ."<br>"; 
    echo"Код заказчика" . "<br>"; 
    echo"\n" . $stroka['id_book'] . "<br>";
    echo"Количество" . "<br>";
    echo"\n" . $stroka['paid'] . "<br>";
    echo"---------------------------------" . "<br>";
}
?>
<form>
<input type="button" value="Вернутся обратно" onClick='location.href="login.php"'>
</form>
<?php include("includes/footer.php"); ?>
