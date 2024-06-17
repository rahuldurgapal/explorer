<?php
include ("../Login/../app/db_connection.php");
session_start();
if(isset($_SESSION['confirm']))
{
    if(isset($_POST['submit']))
    {
        $pass = $_POST['new_password'];
        $email = $_SESSION['email'];
        $new_pass = $_POST['confirm_new_password'];

        if($pass!=$new_pass)
        {
            $warn = "the passwords are not match";
            header("Location: new_password.php?warn=$warn");
        }
        else if (strlen($pass) < 8 || strlen($pass) > 16) {
            $warn = "tPassword should be min 8 characters and max 16 characters";
            header("Location: new_password.php?warn=$warn");
        }
        else if (!preg_match("/\d/", $pass)) {
            $warn = "Password should contain at least one digit";
            header("Location: new_password.php?warn=$warn");
        }
       else if (!preg_match("/[A-Z]/", $pass)) {
            $warn = "Password should contain at least one Capital Letter";
            header("Location: new_password.php?warn=$warn");
    
        }
       else if (!preg_match("/[a-z]/", $pass)) {
            $warn = "Password should contain at least one small Letter";
            header("Location: new_password.php?warn=$warn");
        }
       else if (!preg_match("/\W/", $pass)) {
            $warn = "Password should contain at least one special character";
            header("Location: new_password.php?warn=$warn");
    
        }
       else if (preg_match("/\s/", $pass)) {
            $warn = "Password should not contain any white space";
            header("Location: new_password.php?warn=$warn");
        }
        else
         {
            $sql = "UPDATE `admins` SET `admin_password`='$pass' WHERE `admin_email` = '$email'";
            $q = mysqli_query($con,$sql);
            if($q)
            {
                unset($_SESSION['email']);
                unset($_SESSION['confirm']);
                $_SESSION['pass']=$pass;
                header("Location: password_change.php");
            }
            else
             echo "operation failed";
         }
    }
    ?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="img">
            <img src="img/programming.svg" alt="">
        </div>
        <div class="login_container">
            <form action="<?php   echo $_SERVER['PHP_SELF']; ?>" method="post">
                <img class="profile" src="img/profile.svg" alt="">
                <h2>Welcome</h2>
                <?php
                    if(isset($_GET['warn'])){
                        echo '<div class="alert alert-danger" role="alert">'.
                                $_GET['warn'].
                             '</div>';
                    }
                ?>
                <div class="input_div one">
                    <div class="i">
                    <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>new password</h5>
                        <input type="password" class="input" name="new_password">
                    </div>
                </div>
                <div class="input_div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>confirm new password</h5>
                        <input type="password" class="input" name="confirm_new_password">
                    </div>
                </div>
                <!-- <a href="Forget_Password.php">Forgot Password?</a> -->
                <input type="submit" value="submit" name="submit" class="btn">

            </form>
        </div>
    </div>
    <script src="js/main.js" type="text/javascript"></script>
</body>

</html>

    <?php
}
else
 header("Location: index.php");

?>