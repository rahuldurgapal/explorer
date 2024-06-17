<?php
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if(isset($_SESSION['otp']))
{
    $x = $_SESSION['otp'];
    echo "<script> console.log($x)  </script>";
    if(isset($_POST['otp']))
    {
         $value = $_POST['ottp'];
         if($value==$x){
            unset($_SESSION['otp']);
            $_SESSION['confirm']="confirm otp";
          header("Location: new_password.php");
         }
          else{ 
            unset($_POST['otp']);
            $warn = "invalid OTP";
            header("Location: otp_verify.php?warn=$warn");
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
            <form action="<?php echo $_SERVER['PHP_SELF'];   ?>" method="post">
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
                        <!-- <i class="fas fa-user"></i> -->
                    </div>
                    <div>
                        <h5>Enter OTP</h5>
                        <input type="text"  class="input" autocomplete="off" name="ottp">
                    </div>
                </div>
                <input type="submit" value="Verify" name="otp" class="btn">

            </form>
        </div>
    </div>
    <script src="js/main.js" type="text/javascript"></script>
</body>

</html>

<?php

// session_unset();
}
else
 header("Location: index.php");
?>