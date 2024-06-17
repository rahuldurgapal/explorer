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
           <a  href="index.php">Home</a>
            <a href="book.php">Books</a>
            <a class="active" href="notes.php">Notes</a>
            <a href="students.php">Students</a>
            <a href="admins.php">Admins</a>
        </div>
    </div>
    <div class="content">

        <div class="search-box">

            <form action="" method="post">
                <input type="text" name="data" placeholder="Topic name, Author name" style="width: 50%; border: solid 1px rgb(255, 0, 255);">
                <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                title="search">search</button>
            </form>
        </div>
        <div class="text-center
                    align-items-center
                    vh-75
                    flex-wrap">
            <table class="table table-bordered" style="backdrop-filter: blur(15px);">
                <thead style="background-color: rgb(82, 100, 243); color: white;">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Topic Name</th>
                        <th scope="col">Teacher Name</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <form action="../Panel/text-editor/index.php" method="post">
                            <td>
                                <div class="input">
                                    <input type="text" name="topic_name" placeholder="Topic name" required>
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input type="text" name="teacher_name" placeholder="Teacher name" required>
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input type="text" name="subject_name" placeholder="Subject name" required>
                                </div>
                            </td>
                            <td>
                                <button type="submit" name="topic" class="btn btn-success" data-toggle="tooltip" data-placement="right"
                                title="Add Notes"> <i class="fa fa-plus"></i> </button>
                            </td>
                        </form>
                    </tr>
                 <?php           
                 
                        $sql = "";
                        if(isset($_POST['data'])){
                            $data = $_POST['data'];
                            $sql = "SELECT * FROM notes WHERE notes_topic LIKE '%$data%' OR notes_author LIKE '%$data%' OR notes_subject LIKE '%$data%'";
                        }
                        else $sql = "Select * from notes";
                        $q = mysqli_query($con,$sql);
                        if(mysqli_num_rows($q)>0)
                        {
                          while($row=mysqli_fetch_assoc($q))
                          {
                          ?>
                    <tr>
                        <th scope="row"><?php echo $row['notes_id'];?></th>
                        <td><?php echo $row['notes_topic'];?></td>
                        <td><?php echo $row['notes_author'];?></td>
                        <td><?php echo $row['notes_subject'];?></td>
                        <td>
                            <a href="../app/http/Notes/delete_note.php?id=<?php echo $row['notes_id']; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom"
                            title="Delete Notes" onclick="return confirm('Are you sure you want to delete?')"> <i class="fa fa-trash"></i></a>
                            &nbsp
                            <a href="view_notes.php?id=<?= $row['notes_id']; ?>" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom"
                            target="_blank" title="View Page"><i class="fa fa-eye"></i></a>
                            &nbsp
                            <a href="./text-editor/?id=<?=$row['notes_id']?>" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom"
                            title="Update Page"><i class="fa fa-edit"></i></a>
                        </td>
                 </tr>
                 <?php  
                }
              }  else 
                echo "No data found";
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>