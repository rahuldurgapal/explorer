<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    
    
</head>
<body>
     <img src="./img/loginbg.svg" alt="" class="wave">
     <div class="container">        
     <div class="login_container">
            <form action="../Admin/app/http/user_auth.php" method="post">
                <img class="avatar" src="./img/login avatar.png" >
                <h2>Welcome</h2>
                <?php
                if(isset($_GET['warn'])){
                ?>
                <div class="message">
                    <p><?= $_GET['warn']?></p>
                </div>
                <?php }
                if(isset($_GET['success'])){
                ?>
                    <div class="success">
                        <p><?= $_GET['success']?></p>
                    </div>
                <?php }?>
                <br>
                <div class="input-div one ">
                    <div class="i">
                        <i class="fa fa-user"></i>
                    </div>
                    <div>
                        <h5>Email</h5>
                        <input class="input" type="email" name="user_email" required>
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fa fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input class="input" type="password" name="user_password" required>
                    </div>

                </div>
                <div>
                    <a href="forgetpass.php">Forget Password</a>
                    <input type="submit" name="user_login" class="btn" value="Login">
                    <a href="../signup" style="text-align: center; font-size: larger">Create a new Account</a>
                </div>
                
            </form>
        
     </div>
    </div>
     <script src="js/login.js"></script>
</body>
</html>

<style>
    .message{
        border-radius:10px;
        background-color: rgb(255, 92, 92);
        color: white;
        font-wight: bolder;
        padding: 10px;
        border: 1px solid;
    }
    .success{
        border-radius:10px;
        background-color: rgb(38, 218, 6);
        color: white;
        font-weight: bolder;
        padding: 10px;
        border: 1px solid;
    }
</style>