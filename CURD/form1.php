<?php include("connection.php"); ?>
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
                Registration Form
            </div>
            <form action="#" method="POST">
                <div class="form">
                    <div class="input_field">
                        <label>First Name</label>
                        <input type="text" class="input" name="fname" required="">
                    </div>

                    <div class="input_field">
                        <label>Last Name</label>
                        <input type="text" class="input" name="lname" required="">
                    </div>
                    <div class="input_field">
                        <label>Password</label>
                        <input type="password" class="input" name="pass1" required="">
                    </div>
                    <div class="input_field">
                        <label>Conform Password</label>
                        <input type="password" class="input" name="pass2" required="">
                    </div><!-- comment -->
                    <div class="input_field">
                        <label>Gender</label>
                        <select name="gender" class="select" required>
                            <option value="">select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div><!-- comment -->
                    <div class="input_field">
                        <label>Email</label>
                        <input type="text" class="input" name="email" required="">
                    </div><!-- comment -->
                    <div class="input_field">
                        <label>Phone</label>
                        <input type="text" class="input" name="phone" required="">
                    </div>
                    <div class="input_field">
                        <label>Address</label>
                        <textarea class="textarea" name="adr" required=""></textarea>
                    </div>
                    <div class="input_field_term">
                        <label class="check">
                            <input type="checkbox" class="input" name="checkbox" required="">
                            <span class="checkmark"></span>
                        </label>
                        <p>Agree to Condition</p>
                    </div>
                    <div class="input_field">
                        <input type="submit" class="btn" name="register" value="Register">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

<?php
if ($_POST['register']) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adr = $_POST['adr'];

    $query = "INSERT INTO tb1 (First_name, Last_name, Password, CPassword, Gender, Email, Phone, Address)
              VALUES ('$fname', '$lname', '$pass1', '$pass2', '$gender', '$email', '$phone', '$adr')";

    $data = mysqli_query($conn, $query);

    if ($data) {
         echo "<script>alert('Data Inserted Succesfully')</script>";
    } else {
         echo "<script>alert('Something Wrong')</script>";
    }
}
?>