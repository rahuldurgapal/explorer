<?php
  
 session_start();
 if(isset($_SESSION['std_name'])){
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="css/book.css">
        <link rel="stylesheet" href="../style.css">
</head>
<body>
    
    <section class="header">
  
    <nav>
            <a href="index.php"><img src="../icons/new-explorer.png" alt="#"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa-solid fa-xmark" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="../index.php" >Home</a></li>
                    <li><a href="../about.php">About</a></li>
                    <li><a href="../courses.php">Courses</a></li>
                    <li><a href="index.php">Books</a></li>
                    <li><a href="../notes/index.php">Notes</a></li>
                    <li><a class ="btn " href="../MyAccount.php"><?php  echo $_SESSION['std_name']; ?></a></li>
                </ul>

            </div>
            <i class="fa-solid fa-bars" onclick="showmenu()"></i>
        </nav>

            <form action="" method="post" class="searchabox">
                <input type="text" name="data" placeholder="Search Your Books">
                <button type="submit">search</button>
            </form>

        <div class="container d-flex justify-content-between flex-wrap">
      <?php  
      error_reporting(E_WARNING|E_NOTICE);
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
        include("../Admin/app/db_connection.php");
            $sql = "";
            if(isset($_POST['data'])){
                $data = $_POST['data'];
                $sql = "SELECT * FROM books WHERE book_name LIKE '%$data%' OR book_author_name LIKE '%$data%' OR book_subject_name LIKE '%$data%'";
            }
            else $sql = "Select * from books";
               $q = mysqli_query($con,$sql);
               while($res=mysqli_fetch_assoc($q)){
      ?>
    
            <div class="card ">
                <div class="pdf-preview" data-pdf-url="../Admin/Panel/Books/<?php echo $res['book_pdf'];  ?>"></div>
                <div class="box">
                    <h4><?php echo $res['book_name'];    ?></h4>
                    <hr>
                    <h6><?php  echo $res['book_author_name'];  ?></h6>
                    <hr>

                    <a href="<?php echo "../Admin/Panel/Books/".$res['book_pdf'];?>" class="btn btn-primary" download><i class="fa fa-download" data-toggle="tooltip"
                            data-placement="bottom" title="Download Book"></i></a>
                    &nbsp
                    <button class="btn btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom"
                            title="View Book"></i></button>
                </div>
            </div>

            <?php  }  ?>
        </div>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
        <script src="js/books.js"></script>
</body>
</html>

<script>
        var navlinks = document.getElementById("navlinks");
        function showmenu() {
            navlinks.style.right = "0";
        }
        function hidemenu() {
            navlinks.style.right = "-200px";
        }

        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
</script>

 <?php

} 
else
 header("location: ../index.php"); 
?>