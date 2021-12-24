<?php

session_start();

if(!isset($_SESSION["session_username"])):
header("location:login.php");
else:
?>
	
<?php include("includes/header.php"); ?>
<div id="welcome">
<h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
  <p><a href="logout.php">Выйти</a> из системы</p>
</div>
<form>
<input class="button" value="Книги" onClick='location.href="books.php" ' > <br>
<br> <input class="button" value="поставщик" onClick='location.href="provider.php"'> <br>
<br> <input class="button" value="Заказ" onClick='location.href="order.php"'> <br>
<br> <input class="button" value="Доставка книги" onClick='location.href="deliveries.php"'> <br>
<br> <input class="button" value="Редактировать базу данных" onClick='location.href="redirecting.php"'> <br>
</form>


	
<?php include("includes/footer.php"); ?>
	
<?php endif; ?>
