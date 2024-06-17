<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <img src="./img/sign up.svg" alt="" class="b-img">
    <div class="container">
    
        <div class="sign-container">
            <form action="../Admin/app/http/user_signup.php" method="post">
                <img src="/signup/img/user.png" alt="" class="avatar">
                 <h2>Sign up</h2>
                 <?php
                if(isset($_GET['warn'])){
                ?>
                    <div class="message">
                        <p><?= $_GET['warn']?></p>
                    </div>
                <?php }?>
                <br>
                 <div class="div-input ones">
                    <div class="i">
                        <i class="fa fa-user-circle"></i>
                    </div>
                    <div>
                        <h5>Full name</h5>
                        <input type="text" name="full_name" class="input-area" />
                    </div>
                </div>
                    <div class="div-input two">
                        <div class="i">
                            <i class="fa fa-user"></i>
                        </div>
                        <div>
                            <h5>Email</h5>
                            <input type="email" name="email" class="input-area"/>
                        </div>

                    </div>
                    <div class="div-input two">
                        <div class="i">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div>
                            <h5>Password</h5>
                            <input type="password" name="password" class="input-area"/>
                        </div>

                    </div>
                    
                    <div>
                        <input type="submit" name="signup" class="btn" value="Sign up">
                        <br>
                        <a href="../login" > Already have an account </a>
                    </div>
                
            </form>
        </div>

    </div>
    <script src="./js/signup.js"></script>
</body>
</html>

<style>
    .message{
        border-radius:10px;
        background-color: rgb(255, 92, 92);
        color: white;
        font-weight: bolder;
        padding: 10px;
        border: 1px solid;
    }
</style>