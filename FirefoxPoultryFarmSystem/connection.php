<?php
$connection = mysqli_connect("localhost","root", "","firefox_farm");
if (!isset($connection)){
    die("DB connection Failed!");
}