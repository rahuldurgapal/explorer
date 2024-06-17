<?php
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if(isset($_SESSION['email_otp']))
{
    $x = $_SESSION['email_otp'];
    echo "<script> alert($x)  </script>";
    if(isset($_POST['otp']))
    {
         $value = $_POST['o_t_p'];
         if($value==$x){
            unset($_SESSION['otp']);
            $_SESSION['done']="confirm otp";
          header("location: confirm_register.php");
         }
          else{ 
            unset($_POST['otp']);
            $warn = "invalid OTP";
            header("location: otpverify.php?warn=$warn");
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    
    <img src="../login/img/otpverify.svg" alt="" class="b-img" style="transform: none;">
        <div class="container">        
        <div class="login_container">
               <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post" style="margin-top: 25%;">   
                   <img class="avatar" src="../login/img/otppng.png" >
                   <h4>Please enter the one time Password to verify your account</h4>
                   <?php
                if(isset($_GET['warn'])){
                ?>
                <div class="message">
                    <p><?= $_GET['warn']?></p>
                </div>
                <?php }?>
                <br>
                   <div class="div-input one ">
                       <div class="i">
                           <i class="fa fa-lock"></i>
                       </div>
                       <div>
                           <h5>Enter OTP</h5>
                           <input class="input-area" name="o_t_p" type="text">
                       </div>
                   </div>
                   
                   <div>
                     <input type="submit" name="otp" class="btn"  value="verify">
                   </div>
                   
               </form>
           
        </div>
       </div>
       <script src="../signup/js/signup.js"></script>
</body>
</html>
<?php
}
else
 header("Location: index.php");
?>

<style>
    .message{
        border-radius:10px;
        background-color: rgb(255, 92, 92);
        color: white;
        font-wight: bolder;
        padding: 10px;
        border: 1px solid;
    }
</style>