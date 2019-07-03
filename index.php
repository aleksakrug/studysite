<?php
require_once "lib/functions.php";
require_once "header.php";
?>
<h1>Главная страница</h1>
<?php

require_once "menu.php";
?>
<br><br><br><br>
<form method="post">
    Введите число строк
    <input type="text" name="str">
    Введите число столбцов
    <input type="text" name="stlb">
    <input type="submit" value="Нарисовать таблицу">
</form>
<?php
pifagor($_POST['str'],$_POST['stlb']);
