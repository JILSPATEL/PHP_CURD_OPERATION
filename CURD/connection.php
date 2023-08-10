<?php

$conn = mysqli_connect("localhost", "root", "", "CURD");
if (!$conn) {
    die("error" . mysqli_error());
} else {
    //echo "connected";
}
?>
