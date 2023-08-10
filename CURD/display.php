<html>
    <head>
        <title>Display</title>
        <style>
            body{
                background: blue;
            }
            table{
                background-color: white;
            }
            .ubtn{
                background-color: green;
                color: white;
                border: 2px solid black;
                border-radius: 3px;
                outline: none;
                height: 23px;
                width: 100px;
                font-weight: bold;
                margin-left: 10px;
                cursor: pointer;
            }
            .dbtn{
                background-color: red;
                color: black;
                border: 2px solid black;
                border-radius: 3px;
                outline: none;
                height: 23px;
                width: 110px;
                font-weight: bold;
                margin-left: 20px;
                cursor: pointer;
            }
        </style><!-- comment -->
    </head>

</html>






<?php
include("connection.php");

$query1 = "SELECT * FROM tb1";
$data = mysqli_query($conn, $query1);

$total = mysqli_num_rows($data);

if ($total != 0) {
    ?>
    <h2 align="center"><mark>All Records Details</mark></h2>
    <center>
        <table border="1" cellspacing="4" width="90%">
            <tr>
                <th width="5%">ID</th>
                <th width="7%">First_name</th>
                <th width="7%">Last_name</th>
                <th width="6%">Gender</th>
                <th width="15%">Email</th>
                <th width="10%">Phone</th>
                <th width="20%">Address</th>
                <th width="20%">Operations</th>
            </tr>

    <?php
    while ($result = mysqli_fetch_assoc($data)) {
        echo "<tr>
             <td>" . $result['Id'] . "</td>
                <td>" . $result['First_name'] . "</td>
                <td>" . $result['Last_name'] . "</td>
                <td>" . $result["Gender"] . "</td>
                <td>" . $result["Email"] . "</td>
                <td>" . $result["Phone"] . "</td>
                <td>" . $result["Address"] . "</td>
                <td><a href='update.php?id=$result[Id]'><input type='submit'
                    value='Update' class='ubtn'></a>
                    
                    <a href='delete.php?id=$result[Id]'><input type='submit'
                    value='Delete' class='dbtn' onclick='return check_delete()'></a>
                </td>
            </tr>";
    }
} else {
    echo "no record found";
}
?>
    </table>
</center>

<script>
    function check_delete() {
        return confirm('You Want To Delete Data?')
    }
</script>

