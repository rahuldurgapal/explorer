<?php
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../app/db_connection.php");

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Admin Panel</title>
</head>

<body>
    <?php

        include("header.php");
    ?>

    <div class="fixed">
        <div class="sidebar">
        <a href="index.php">Home</a>
            <a class="active" href="book.php">Books</a>
            <a href="notes.php">Notes</a>
            <a href="students.php">Students</a>
            <a href="admins.php">Admins</a>
            <!-- <a href="#about"></a> -->
        </div>
    </div>

    <div class="content">

        <div class="search-box">
            <form action="" method="post">
                <input type="text" name="data" style="border: 2px solid rgb(255, 51, 255); width: 50%;"
                    placeholder="Book name, Author name, Book Id">
                <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom"
                title="Search Book">search</button>
            </form>
        </div>
        <div class="text-center
                    align-items-center
                    vh-75
                    flex-wrap">
            <table class="table table-bordered" style="backdrop-filter: blur(15px);">
                <thead style="background-color: rgb(82, 100, 243); color: white;">
                    <tr>
                        <th scope="col">Books Id</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Author Name</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <th scope="row"></th>
                        <form action="upload_book.php" method="post">
                            <td>
                                <div class="input">
                                    <input type="text" name="book_name" placeholder="Book name" required>
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input type="text" name="author_name" placeholder="Author name" required>
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input type="text" name="subject_name" placeholder="Subject name" required>
                                </div>
                            </td>
                            <td>
                                <button type="submit" name="next" class="btn btn-success" data-toggle="tooltip" data-placement="bottom"
                                title="Add Book"> <i class="fa fa-plus"></i> </button>
                            </td>
                        </form>
                    </tr>
                   <?php
                         $sql = "";
                         if(isset($_POST['data'])){
                             $data = $_POST['data'];
                             $sql = "SELECT * FROM books WHERE book_name LIKE '%$data%' OR book_author_name LIKE '%$data%' OR book_subject_name LIKE '%$data%'";
                         }
                         else $sql = "Select * from books";
                         $query=mysqli_query($con,$sql);
                         if(mysqli_num_rows($query)>0)
                         {
                           
                         while($row=mysqli_fetch_assoc($query))
                         {
                           
                           ?>
                     
                    <tr>
                        <th scope="row"><?php echo $row['book_id']; ?></th>
                        <td><?php echo $row['book_name']; ?></td>
                        <td><?php echo $row['book_author_name'];  ?></td>
                        <td><?php echo $row['book_subject_name'];  ?></td>
                        <td>
                            <a href="../app/http/Book/delete_book.php?id=<?php echo $row['book_id']; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom"
                            title="Delete Book" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></a>
                            &nbsp
                            <a href="view_book.php?id=<?php echo $row['book_id']; ?>" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom"
                              target="_blank" title="View Book"><i class="fa fa-eye"></i></a>
                            &nbsp
                            <a href="update_book.php?id=<?php echo $row['book_id'];  ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom"
                            title="Update Book"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    <?php
                         }
                         }
                         else{
                            echo "No data found";
                         }
                 ?>

                </tbody>
              
            </table>
        </div>
    </div>
</body>

</html>