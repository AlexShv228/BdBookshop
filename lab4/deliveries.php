<?php include("includes/header.php"); ?>
<?php
mysqli_connect("localhost", "root", "1111") or die ("Невозможно подключиться к серверу");
mysqli_select_db($con, "shop1") or die ("Базы данных нет");
$rows = mysqli_query($con, "SELECT id_number,date_of_book, size_of_books, id_book, id_provider FROM `deliveries`");
while ($stroka = mysqli_fetch_array($rows)){
    echo"\n";
    echo"Код " . "<br>";
    echo"\n" . $stroka['id_number   '] . "<br>"; 
    echo"Дата покупки книги" . "<br>";
    echo"\n" . $stroka['date_of_book'] . "<br>";
    echo"Размер" . "<br>";
    echo"\n" . $stroka['size_of_books'] . "<br>";
    echo"Код книги" . "<br>";
    echo"\n" . $stroka['id_book'] . "<br>";
    echo"Код заказчика" . "<br>"; 
    echo"\n" . $stroka['id_provider'] . "<br>";
    echo"---------------------------------" . "<br>";
}
?>
<form>
<input type="button" value="Вернутся обратно" onClick='location.href="login.php"'>
</form>
<?php include("includes/footer.php"); ?>