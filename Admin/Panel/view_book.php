<?php
session_start();
if(isset($_GET['id']) && (isset($_SESSION['user']) || isset($_SESSION['std_name'])))
{

  include("../app/db_connection.php");
  error_reporting(E_WARNING|E_NOTICE);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Admin Panel</title>
</head>

<body>
<header>
        <img src="../image/d.png" width="200px">
    </header>
        <?php 
         $id = $_GET['id'];
         $sql = "select book_pdf from books where book_id = '$id'";
         $query=mysqli_query($con,$sql);
         $res = mysqli_fetch_assoc($query);
         $pdf=$res['book_pdf'];
         ?>
          
        <div class="pdf-view">
            <embed
                src="<?php  echo "../Panel/Books/$pdf";  ?>"
                type="application/pdf" frameBorder="0" scrolling="auto" height = "1000px"
                width="100%">
            </embed>
        </div>

</body>

<style>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Courier New';
    }

    header {
        z-index: 9999;
        width: 100%;
        padding: 10px;
        position: fixed;
        backdrop-filter: blur(2px);
        box-shadow: 0px -5px 10px 1px;
        display: flex;
        align-items: center;
        gap: 20px;
        justify-content: center;
    }
    .pdf-view{
        padding-top: 80px
    }
</style>

</html>
<?php
}
else
 header("location: book.php");
?>