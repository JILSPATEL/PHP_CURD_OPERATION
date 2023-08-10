<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM tb1 WHERE Id='$id'";
$data = mysqli_query($conn, $query);

if ($data) {
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <meta http-equiv="refresh" content="0; URL=http://localhost/PhpProject1/CURD/display.php" />
    <?php
} else {
    echo "<script>alert('Something Wrong')</script>";
}
?>