<?php
 include("../../db_connection.php");
 
 if(isset($_GET['id']))
 {
    $id=$_GET['id'];
    $sql1 = "select * from books where book_id=$id";
    $q1=mysqli_query($con,$sql1);
    $res = mysqli_fetch_assoc($q1);
    $file = __DIR__."/Admin/Panel/Books/" . $res['book_pdf'];
    $sql = "delete from books where book_id = $id";
    $q= mysqli_query($con,$sql);
    if($q || unlink($file))
      header("location: ../../../Panel/book.php");
    else
     echo "operation failed";
 }
 else
  header("location: ../../../Panel/book.php");



?>