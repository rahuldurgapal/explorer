<?php
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if(isset($_SESSION['std_otp']))
{

    $x = $_SESSION['std_otp'];
    echo "<script> console.log($x)  </script>";
    if(isset($_POST['verify']))
    {
         $value = $_POST['ottp'];
         if($value==$x){
            unset($_SESSION['verify']);
            $_SESSION['confirm_otp']="confirm otp";
          header("Location: newpassword.php");
       
         }
          else{ 
            unset($_POST['verify']);
            $warn = "invalid OTP";
            header("Location: otpverify.php?warn=$warn");
        }
    }



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <img src="img/otpverify.svg" alt="" class="wave" style="transform: none;">
     <div class="container">        
     <div class="login_container">
            <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST">
                <img class="avatar" src="img/otppng.png" >
                <h4>Please enter the one time Password to verify your account</h4>
                <div class="input-div one ">
                    <div class="i">
                        <i class="fa fa-user"></i>
                    </div>
                    <div>
                        <h5>Enter OTP</h5>
                        <input class="input" name="ottp" type="text" required>
                    </div>
                </div>
                
                <div>
                  <input type="submit" name="verify" class="btn" value="verify">
                </div>
                
            </form>
        
     </div>
    </div>
     <script src="js/login.js"></script>
</body>
</html>

<?php
}
 else
  echo "something wrong";
?>