<?php
 include ("../Login/../app/db_connection.php");
 if(isset($_POST['verify']))
 {
    session_start();
    $email = $_POST['admin_email'];
    $sql = "SELECT * FROM `admins` WHERE `admin_email` = '$email'";
    $q=mysqli_query($con,$sql);
    if(mysqli_num_rows($q)>=1)
    {
        $_SESSION['otp']=rand(100000,999999);
        $_SESSION['email']=$email;
        header("Location: otp_verify.php");
    }
    else{ 
        unset($_POST['verify']);
        $warn = "Your @email is invalid!";
        header("Location: Forget_Password.php?warn=$warn");
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
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Enter Your Email</h5>
                        <input type="email" class="input" autocomplete="off" name="admin_email">
                    </div>
                </div>
                <input type="submit" value="Send OTP" name="verify" class="btn">

            </form>
        </div>
    </div>
    <script src="js/main.js" type="text/javascript"></script>
</body>

</html>