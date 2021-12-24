<?php include("includes/header.php"); ?>

<form>
    Выберете таблицу, которую хотите редактировать
<br> <input class="button" value="Книга" onClick='location.href="bookchange.php" ' > <br>
<br> <input class="button" value="Заказ" onClick='location.href="orderchange.php"'> <br>
<br> <input class="button" value="Достака книги" onClick='location.href="deliverieschange.php"'> <br>
<br> <input class="button" value="Поставщик" onClick='location.href="providerchange.php"'> <br>
<br> <input class="button" value="Вернутся обратно" onClick='location.href="intropage.php"'> <br>
</form>


<?php include("includes/footer.php"); ?>