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
    <link rel="stylesheet" href="../CSS/home.css">
    <title>Admin Panel</title>
</head>

<body>
    <?php
        include("header.php");
        include("../app/db_connection.php");

        $sql = mysqli_query($con,"SELECT * FROM students");
        $students = mysqli_num_rows($sql);


        $sql1 = mysqli_query($con,"SELECT * FROM books");
        $books = mysqli_num_rows($sql1);


        $sql2 = mysqli_query($con,"SELECT * FROM notes");
        $notes = mysqli_num_rows($sql2);


        $sql3 = mysqli_query($con,"SELECT * FROM admin");
        $admins = mysqli_num_rows($sql3);


    ?>
    <div class="fixed">
        <div class="sidebar">
            <a class="active" href="index.php">Home</a>
            <a href="book.php">Books</a>
            <a href="notes.php">Notes</a>
            <a href="students.php">Students</a>
            <a href="admins.php">Admins</a>
        </div>
    </div>
    <div class="content" style="display: flex;
                                flex-wrap: wrap;
                                gap: 50px;
                                justify-content: center;">
    <div class="box" style="background-color: rgb(239, 15, 255);">
            <div class="title">
                <h1>Students Info</h1>
            </div>
            <hr>
            <div class="info">
                <img src="../image/students.jpeg" alt="">
                <h1><?php echo $students;   ?></h1>
            </div>
            <a href="students.php" class="btn">
                View Students > 
            </a>
        </div>

        <div class="box" style="background-color: rgb(11, 197, 11)">
            <div class="title">
                <h1>Admin Info</h1>
            </div>
            <hr>
            <div class="info">
                <img src="../image/teacher.jpg" alt="">
                <h1><?php echo $admins;   ?></h1>
            </div>
            <a href="admins.php" class="btn">
                View Admins > 
            </a>
        </div>

        <div class="box" style="background-color: rgb(34, 1, 219)">
            <div class="title">
                <h1>Books Info</h1>
            </div>
            <hr>
            <div class="info">
                <i class="fa fa-book" style="font-size: 100px; color: rgb(255, 238, 0)"></i>
                <h1><?php echo $books;   ?></h1>
            </div>
            <a href="book.php" class="btn">
                View Books > 
            </a>
        </div>

        <div class="box" style="background-color: rgb(219, 1, 81)">
            <div class="title">
                <h1>Notes Info</h1>
            </div>
            <hr>
            <div class="info">
                <i class="fa fa-file" style="font-size: 100px; color: rgb(255, 207, 207);"></i>
                <h1><?php echo $notes;   ?></h1>
            </div>
            <a href="notes.php" class="btn">
                View Notes > 
            </a>
        </div>

        <div class="box" style="background-color: rgb(11, 96, 255)">
            <div class="title">
                <h1>No. of views</h1>
            </div>
            <hr>
            <div class="info">
                <i class="fa fa-eye" style="font-size: 100px;"></i>
                <h1>00</h1>
            </div>
            
        </div>

        <div class="box" style="background-color: rgb(3, 198, 198)">
            <div class="title">
                <h1>No. of Downloads</h1>
            </div>
            <hr>
            <div class="info">
                <i class="fa fa-download" style="font-size: 100px; color: rgb(255, 0, 0);"></i>
                <h1>00</h1>
            </div>
        </div>
    </div>
</body>

</html>