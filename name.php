<?php
require_once "lib/functions.php";
?>

<form method="post">
    Как вас зовут? <input type="text" name="name">
    <input type="submit"  value="ОК">
</form>

<?php
hello($_POST['name']);