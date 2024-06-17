
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    session_start();
    if(isset($_SESSION['user']))
    {
       include("../app/db_connection.php");
?>
    <nav class="navbar navbar-light fixed">
        <a class="navbar-brand w-15" href="#">
            <img src="../image/d.png" width="100%" alt="logo">
        </a>
        <div class="dropdown show">
            <a class="btn dropdown-toggle" style="background-color: rgb(0, 136, 255); color: white;" href="#"
                role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class='fa fa-user'></i>
                <?=$_SESSION['username']?>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#"><i class="fa fa-edit"></i> Edit</a>
                <a class="dropdown-item" href="../app/http/admin_logout.php"><i class="fa fa-sign-out"></i> logout</a>
            </div>
        </div>
    </nav>
<?php
    }
    else{
        header("location: ../");
    }
?>