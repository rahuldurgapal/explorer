<?php

error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../../db_connection.php");

if(isset($_POST['submit']))
{
   $id = $_POST['id'];
   
   $book_name = $_POST['book_name'];
   $book_author = $_POST['book_author'];
   $subject_name = $_POST['subject_name'];
   $file = $_POST['file'];

    $new_book_name = mysqli_real_escape_string($con,$book_name);
    $new_book_author = mysqli_real_escape_string($con,$book_author);
    $new_subject_name = mysqli_real_escape_string($con,$subject_name);

    
    if ($_FILES['book_pdf']['error'] === UPLOAD_ERR_OK){
    $file_name =$_FILES['book_pdf']['name'];
    $file_tmp = $_FILES['book_pdf']['tmp_name'];
    
    $fileExtension = pathinfo($file_name, PATHINFO_EXTENSION);
    if(strtolower($fileExtension)==='pdf')
    {
        if(move_uploaded_file($file_tmp,"../../../Panel/Books/$file_name"))
         echo "file uploades successfully<br>";
        else 
         echo "file not uploaded<br>";

        $sql = "update books set book_name = '$new_book_name', book_author_name = '$new_book_author', book_subject_name = '$new_subject_name', book_pdf = '$file_name' where book_id = $id";
        $q=mysqli_query($con,$sql);
        if($q)
        header("location: ../../../Panel/book.php");
        else
        echo "operation failed";
    }
    else{
        echo "Please select pdf format";
    }
}
  else{
    $sql = "update books set book_name = '$new_book_name', book_author_name = '$new_book_author', book_subject_name = '$new_subject_name', book_pdf = '$file' where book_id = $id";
        $q=mysqli_query($con,$sql);
        if($q)
        header("location: ../../../Panel/book.php");
        else
        echo "operation failed";
  }
}
else{
    header("location: ../../../Panel/book.php");
}



?>