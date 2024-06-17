<?php
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if(isset($_SESSION['username']))
 header("location: Panel/");

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
    <link rel="stylesheet" href="Login/css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="img">
            <img src="Login/img/programming.svg" alt="">
        </div>
        <div class="login_container">
            <form action="app/http/admin_auth.php" method="post">
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
                        <h5>Username or Email</h5>
                        <input type="text" class="input" autocomplete="off" name="username">
                    </div>
                </div>
                <div class="input_div two">
                    <div class="i">
                        <i class="fas fa-lock" id="lock"></i>
                        <i class="fa fa-eye" id="eye" style="cursor: pointer; display: none;"></i>

                    </div>
                    <div>
                        <h5>Password</h5>
                        <input type="password" class="input" id="password" name="password">
                        <!-- <i class="fa fa-eye" id="eye" style="cursor: pointer; display: none;"></i> -->
                    </div>
                        <script>
                            document.getElementById('password').addEventListener("input", () =>{
                                if(document.getElementById('password').value.length > 0){
                                    document.getElementById('eye').style.display = "block";
                                    document.getElementById('lock').style.display = "none";
                                }
                                else{
                                    document.getElementById('eye').style.display = "none";
                                    document.getElementById('lock').style.display = "block";
                                }
                            })
                            document.getElementById('eye').addEventListener("click", () => {
                                if (document.getElementById('password').type === "password"){
                                    document.getElementById('password').type = "text";
                                    document.getElementById('eye').className = "fa fa-eye-slash";
                                }
                                else {
                                    document.getElementById('password').type = "password";
                                    document.getElementById('eye').className = "fa fa-eye";

                                }                                
                            })
                        </script>
                </div>
                <a href="Login/Forget_Password.php" id="link">Forgot Password?</a>
                <input type="submit" value="Login" autocomplete="off" name="login" class="btn">

            </form>
        </div>
    </div>
    <script src="Login/js/main.js" type="text/javascript"></script>
</body>

</html>