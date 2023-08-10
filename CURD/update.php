<?php
include("connection.php");

$id = $_GET['id'];

$query1 = "SELECT * FROM tb1 where Id='$id'";
$data = mysqli_query($conn, $query1);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>CURD</title><!-- comment -->
        <<link rel="stylesheet" href="Style.css"/>
    </head>
    <body>
        <div class="container">
            <div class="title">
                Update  Form
            </div>
            <form action="#" method="POST">
                <div class="form">
                    <div class="input_field">
                        <label>First Name</label>
                        <input type="text" value="<?php echo $result['First_name'] ?>" class="input" name="fname" required="">
                    </div>

                    <div class="input_field">
                        <label>Last Name</label>
                        <input type="text" value="<?php echo $result['Last_name'] ?>" class="input" name="lname" required="">
                    </div>
                    <div class="input_field">
                        <label>Password</label>
                        <input type="password" value="<?php echo $result['Password'] ?>" class="input" name="pass1" required="">
                    </div>
                    <div class="input_field">
                        <label>Conform Password</label>
                        <input type="password" value="<?php echo $result['CPassword'] ?>" class="input" name="pass2" required="">
                    </div><!-- comment -->
                    <div class="input_field">
                        <label>Gender</label>

                        <select name="gender" value="" class="select" required>

                            <option value="">select</option>
                            <option value="male" 
                            <?php
                            if ($result['Gender'] == 'male') {
                                echo "selected";
                            }
                            ?>
                                    >Male</option>
                            <option value="female"
                            <?php
                            if ($result['Gender'] == 'female') {
                                echo "selected";
                            }
                            ?>
                                    >Female</option>
                        </select>
                    </div><!-- comment -->
                    <div class="input_field">
                        <label>Email</label>
                        <input type="text" value="<?php echo $result['Email'] ?>" class="input" name="email" required="">
                    </div><!-- comment -->
                    <div class="input_field">
                        <label>Phone</label>
                        <input type="text" value="<?php echo $result['Phone'] ?>" class="input" name="phone" required="">
                    </div>
                    <div class="input_field">
                        <label>Address</label>
                        <textarea class="textarea" value="" name="adr" required=""><?php echo $result["Address"] ?></textarea>
                    </div>
                    <div class="input_field_term">
                        <label class="check">
                            <input type="checkbox" class="input" name="checkbox" required="">
                            <span class="checkmark"></span>
                        </label>
                        <p>Agree to Condition</p>
                    </div>
                    <div class="input_field">
                        <input type="submit" class="btn" name="Update" value="Update">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

<?php
if ($_POST['Update']) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adr = $_POST['adr'];

    $query = "UPDATE tb1 set First_name='$fname',Last_name='$lname',Password='$pass1',CPassword='$pass2',Gender='$gender',Email='$email',Phone='$phone',Address='$adr' WHERE Id='$id'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Updated Succesfully')</script>";
        ?>

        <meta http-equiv="refresh" content="0; URL=http://localhost/PhpProject1/CURD/display.php" />

        <?php
    } else {
        echo "<script>alert('Something wrong')</script>";
    }
}
?>