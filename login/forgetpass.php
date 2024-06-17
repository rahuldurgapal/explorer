<?php
 error_reporting(E_WARNING|E_NOTICE);
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

 include("../../Admin/app/db_connection.php");
 if(isset($_POST['send']))
 {
    session_start();
    $email = mysqli_real_escape_string($con,$_POST['std_email']);
    $sql = "select student_email from students where student_email= '$email'";
    $q=mysqli_query($con,$sql);
    if(mysqli_num_rows($q)>=1)
    {
        $_SESSION['std_otp']=rand(100000,999999);
        $_SESSION['email']=$email;
        header("Location: otpverify.php");
    }
    else{ 
        unset($_POST['send']);
        $warn = "Your @email is invalid!";
        header("Location: forgetpass.php?warn=$warn");
    }
 }

?>   



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <img src="img/forgetpass.svg" alt="" class="wave">
    <div class="container">
        <div class="login_container">
        
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <img class="avatar" src="img/forgetpass.png" >
               
                
                <h2 style="font-size: 25px;">forget password</h2>
                <div class="input-div one ">
                    <div class="i">
                        <i class="fa fa-user"></i>
                    </div>
                    <div>
                        <h5>Enter email</h5>
                        <input class="input" name="std_email" type="email" required>
                    </div>
                    </div>
                    <div>
                           <input type="submit" name="send" class="btn"  value="send OTP">
                   </div>
            </form>

        </div>

    </div>
    <script src="js/login.js"></script>
</body>
</html>