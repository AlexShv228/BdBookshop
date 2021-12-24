<?php include("includes/header.php"); ?>
<?php
mysqli_connect("localhost", "root", "1111") or die ("Невозможно подключиться к серверу");
mysqli_select_db($con, "shop1") or die ("Базы данных нет");
$rows = mysqli_query($con, "SELECT id_provider, name, town, /*addres,*/ phone FROM `provider`");
while ($stroka = mysqli_fetch_array($rows)){
    echo"\n";
    echo"Код поставщика" . "<br>";
    echo"\n" . $stroka['id_provider'] . "<br>"; 
    echo"Имя" . "<br>";
    echo"\n" . $stroka['name'] . "<br>"; 
    echo"Город" . "<br>"; 
    echo"\n" . $stroka['town'] . "<br>"; 
    echo"Адрес" . "<br>"; 
  /*  echo"\n" . $stroka['addres'] . "<br>";
    echo"phone" . "<br>";*/
    echo"\n" . $stroka['phone'] . "<br>";
    echo"---------------------------------" . "<br>";
}
?>
<form>
<input type="button" value="Вернутся обратно" onClick='location.href="login.php"'>
</form>
<?php include("includes/footer.php"); ?>