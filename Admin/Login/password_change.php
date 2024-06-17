<?php
session_start();
if(isset($_SESSION['pass']))
{
    session_abort();

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
    <!--  -->
    <div class="container">
        <div class="img">
            <img src="img/programming.svg" alt="">
        </div>
        <div class="login_container">
           
                <?php
                        echo '<div class="alert alert-success" role="alert">
                             Password Change Successfully
                             </div>';
                ?>
                <a href="../index.php" style="">Back To Login</a>

            
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