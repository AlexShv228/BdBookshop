<?php include("includes/header.php"); ?>
<form action="deliverieschange.php" method="post">
      <p>
        <label for="id_number">id_number:</label>
        <input type="number" name="id_number" id="id_number">
    </p>
        <p>
        <label for="date_of_book">date_of_book:</label>
        <input type="date" name="date_of_book" id="date_of_book">
    </p>
        <p>
        <label for="size_of_books">size_of_books:</label>
        <input type="number" name="size_of_books" id="size_of_books">
    </p>
    <p>
        <label for="id_provider">id_provider:</label>
        <input type="number" name="id_provider" id="id_provider">
    </p>
    <p>
        <label for="id_book">id_book:</label>
        <input type="number" name="id_book" id="id_book">
    </p>


   
<br class="submit"><input class="button" id="add" name= "add" type="submit" value="Добавить"><br>
<br class="submit"><input class="button" id="delete" name= "delete" type="submit" value="Удалить"><br>
<br class="submit"><input class="button" id="update" name= "update" type="submit" value="Изменить"><br>
<br> <input class="button" value="Вывести таблицу на экран" onClick='location.href="deliveries.php" ' > <br>
<br> <input class="button" value="Вернутся обратно" onClick='location.href="redirecting.php"'> <br>
</form>

<?php include("includes/footer.php"); ?>



<?php
if(isset($_POST["add"])){
$link = mysqli_connect("localhost", "root", "1111", "shop1");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id_number = mysqli_real_escape_string($link, $_REQUEST['id_number']);
$date_of_book = mysqli_real_escape_string($link, $_REQUEST['date_of_book']);
$size_of_books = mysqli_real_escape_string($link, $_REQUEST['size_of_books']);
$id_provider = mysqli_real_escape_string($link, $_REQUEST['id_provider']);
$id_book = mysqli_real_escape_string($link, $_REQUEST['id_book']);



 
// Attempt insert query execution
$sql = "INSERT INTO deliveries (id_number,date_of_book,  size_of_books ,id_provider, id_book ) VALUES ('$id_number', '$date_of_book','$size_of_books','$id_provider', '$id_book' )";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
}
else {}
?>


<?php
if(isset($_POST["delete"])){
$link = mysqli_connect("localhost", "root", "1111", "shop1");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id_number = mysqli_real_escape_string($link, $_REQUEST['id_number']);
 
// Attempt delete query execution
$sql = "DELETE FROM deliveries WHERE id_number='$id_number'";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
}else {}
?>


<?php
if(isset($_POST["update"])){
$link = mysqli_connect("localhost", "root", "1111", "shop1");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$id_number = mysqli_real_escape_string($link, $_REQUEST['id_number']);
$date_of_book = mysqli_real_escape_string($link, $_REQUEST['date_of_book']);
$size_of_books = mysqli_real_escape_string($link, $_REQUEST['size_of_books']);
$id_provider = mysqli_real_escape_string($link, $_REQUEST['id_provider']);
$id_book = mysqli_real_escape_string($link, $_REQUEST['id_book']);

 
// Attempt insert query execution
$sql = "INSERT INTO deliveries (id_number,date_of_book,  size_of_books ,id_provider, id_book ) VALUES ('$id_number', '$date_of_book','$size_of_books','$id_provider', '$id_book' )";

if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
}else {}
?>