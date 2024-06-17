<?php
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../../db_connection.php");


    if(isset($_POST['submit']))
    {
         
    
   $book_name = $_POST['book_name'];
   $book_author = $_POST['book_author'];
   $subject_name = $_POST['subject_name'];

    $new_book_name = mysqli_real_escape_string($con,$book_name);
    $new_book_author = mysqli_real_escape_string($con,$book_author);
    $new_subject_name = mysqli_real_escape_string($con,$subject_name);
     
    $file_name =$_FILES['book_pdf']['name'];
    $file_tmp = $_FILES['book_pdf']['tmp_name'];
    
    $fileExtension = pathinfo($file_name, PATHINFO_EXTENSION);
    if(strtolower($fileExtension)==='pdf')
    {
        

        $sql = "insert into books(book_name, book_author_name, book_subject_name, book_pdf) values ('$new_book_name', '$new_book_author', '$new_subject_name', '$file_name')";
        echo $sql;
        $q=mysqli_query($con,$sql);
        if($q){
            if(move_uploaded_file($file_tmp,"../../../Panel/Books/$file_name"))
                echo "file uploades successfully<br>";
            else 
                echo "file not uploaded<br>";
            header("location: ../../../Panel/book.php");
        }
       else
        echo "operation failed";
    }
    else{
        echo "Please select pdf format";
    }
    }
    else{
        echo "not selected";
    }
   
    





?>