<?php include("includes/header.php"); ?>
<?php
mysqli_connect("localhost", "root", "1111") or die ("Невозможно подключиться к серверу");
mysqli_select_db($con, "shop1") or die ("Базы данных нет");
$rows = mysqli_query($con, "SELECT name_of_book, author, price, balance FROM `books`");
while ($stroka = mysqli_fetch_array($rows)){
    echo"\n";
    echo"Название" . "<br>";
    echo"\n" . $stroka['name_of_book'] . "<br>"; 
    echo"Автор" . "<br>"; 
    echo"\n" . $stroka['author'] . "<br>";
    echo"Стоимомть аренды" . "<br>";
    echo"\n" . $stroka['price'] . "<br>";
    echo"Количество" . "<br>";
    echo"\n" . $stroka['balance'] . "<br>";
    echo"---------------------------------" . "<br>";
}
?>
<form>
<input type="button" value="Вернутся обратно" onClick='location.href="login.php"'>
</form>
<?php include("includes/footer.php"); ?>