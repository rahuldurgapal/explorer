<?php
  session_start();
  if(isset($_SESSION['std_name'])){

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="css/notes.css">
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
                    <li><a href="../books/index.php">Books</a></li>
                    <li><a href="index.php">Notes</a></li>
                    <li><a class ="btn " href="../MyAccount.php"><?php  echo $_SESSION['std_name']; ?></a></li>
                </ul>

            </div>
            <i class="fa-solid fa-bars" onclick="showmenu()"></i>
        </nav>
        <form action="" method="post" class="searchabox">
                <input type="text" name="data" placeholder="Search Your Notes">
                <button type="submit">search</button>
            </form>

        <div class="container d-flex justify-content-around flex-wrap ">
      <?php  
      error_reporting(E_WARNING|E_NOTICE);
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
        include("../Admin/app/db_connection.php");
        $sql = "";
        if(isset($_POST['data'])){
            $data = $_POST['data'];
            $sql = "SELECT * FROM notes WHERE notes_topic LIKE '%$data%' OR notes_author LIKE '%$data%' OR notes_subject LIKE '%$data%'";
        }
        else $sql = "Select * from notes";
               $q = mysqli_query($con,$sql);
               while($row=mysqli_fetch_assoc($q)){
      ?>
    
        <div class="card ">
                <h3><?= $row['notes_topic']?></h3>
                <hr>
                <div class="box">
                    <p><pan>Subject Name : </pan> <?=$row['notes_subject']?></p>
                    <p><pan>Author Name : </pan> <?=$row['notes_author']?></p>
                    <a href="../Admin/Panel/view_notes.php?id=<?=$row['notes_id']?>" target="_blank" class="btn btn-primary">View</a>
                </div>
            </div>

            <?php  }  ?>
        </div>
        
        <script src="js/notes.js"></script>
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
    window.addEventListener("load", function () {
        loader.style.display = "none";
    })
</script>

<?php  }  
else
 header("../index.php");
?>