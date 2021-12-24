<?php include("includes/header.php"); ?>
<form action="providerchange.php" method="post">
      <p>
        <label for="id_provider">id_provider:</label>
        <input type="number" name="id_provider" id="id_provider">
    </p>
    <p>
        <label for="name">name:</label>
        <input type="text" name="name" id="name">
    </p>
        <p>
        <label for="town">town:</label>
        <input type="text" name="town" id="town">
    </p>
    <p>
        <label for="addres">addres:</label>
        <input type="text" name="addres" id="addres">
    </p>
    <p>
        <label for="phone">phone:</label>
        <input type="number" name="phone" id="phone">
    </p>
   
<br class="submit"><input class="button" id="add" name= "add" type="submit" value="Добавить"><br>
<br class="submit"><input class="button" id="delete" name= "delete" type="submit" value="Удалить"><br>
<br class="submit"><input class="button" id="update" name= "update" type="submit" value="Изменить"><br>
<br> <input class="button" value="Вывести таблицу на экран" onClick='location.href="provider.php" ' > <br>
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
$id_provider = mysqli_real_escape_string($link, $_REQUEST['id_provider']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$town = mysqli_real_escape_string($link, $_REQUEST['town']);
$addres = mysqli_real_escape_string($link, $_REQUEST['addres']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
 
// Attempt insert query execution
$sql = "INSERT INTO provider (id_provider, name, town , addres, phone) VALUES ('$id_provider','$name','$town', '$addres', '$phone' )";
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

$id_provider = mysqli_real_escape_string($link, $_REQUEST['id_provider']);
 
// Attempt delete query execution
$sql = "DELETE FROM provider WHERE id_provider='$id_provider'";
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
$id_provider = mysqli_real_escape_string($link, $_REQUEST['id_provider']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$town = mysqli_real_escape_string($link, $_REQUEST['town']);
$addres = mysqli_real_escape_string($link, $_REQUEST['addres']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);

 
// Attempt update query execution
$sql = "UPDATE provider SET  name = '$name', town = '$town', addres = '$addres', phone = '$phone' WHERE id_provider = '$id_provider'";

if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
}else {}
?>