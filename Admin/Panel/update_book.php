<?php

 if(isset($_GET['id']))
 {
   
     $id=$_GET['id'];
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
        <a class="active" href="index.php">Home</a>
            <a href="book.php">Books</a>
            <a href="notes.php">Notes</a>
            <a href="students.php">Students</a>
            <a href="admins.php">Admins</a>
        </div>
    </div>
    <div class="content">
        <div class="w-400 p-5 shadow rounded">

            <div class="d-flex
                                justify-content-center
                                align-items-center
                                flex-column">

                <h1 class="text-center">
                    Update Book
                </h1>

            </div>
            <?php
                $sql = "select * from books where book_id = $id";
                $q=mysqli_query($con,$sql);
                $res = mysqli_fetch_assoc($q);
                    
                $file_name = $res['book_pdf'];
            ?>

            <div class="text-center">
            <form action="../app/http/Book/book_update.php" method="post" enctype="multipart/form-data">
                <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-lg-10 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <div class="card-body p-4">
                                        <h3>Information of Book</h3>
                                        <hr class="mt-0 mb-4">
                                        <div class="text-center">
                                            <input type="hidden" name="id" value="<?=$id;?>">
                                            <h5>Book Name</h5>
                                            <div class="input">
                                                <input type="text" name="book_name" value="<?=$res['book_name']; ?>" required>
                                            </div>
                                            <br>
                                            <h5>Author Name</h5>
                                            <div class="input">
                                                <input type="text" name="book_author" value="<?=$res['book_author_name']; ?>" required>
                                            </div>
                                            <br>
                                            <h5>Subject Name</h5>
                                            <div class="input">
                                                <input type="text" name="subject_name" value="<?=$res['book_subject_name']; ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 gradient-custom text-center text-white"
                                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <embed
                                        src="<?="../Panel/Books/$file_name";   ?>" id="PDFfile"
                                        type="application/pdf" frameBorder="0" scrolling="auto" height="650px"
                                        width="100%"></embed>
                                        <input type="file" name="book_pdf"  id="upload"  accept="application/pdf" />
                                        <input type="hidden" name="file" value="<?php echo $file_name;  ?>"  >
                                </div>
                                <a name="pdf" class="btn btn-primary"
                                    style="width: 80%; margin: auto; margin-top: 10px;" id="uploadBOOK">Upload a book</a>
                            </div>
                            <div class="text-center" style="padding: 10px">
                                <button name="submit" class="btn btn-success" type="submit" onclick="return confirm('Are you sure?')">Upload Data</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            
        </div>
</body>

</html>

<?php
 }
 else
  header("location: book.php");

?>

<script type="text/javascript">

    document.getElementById('uploadBOOK').addEventListener('click', () => {
        document.getElementById("upload").click();
        document.getElementById('upload').addEventListener('change', () =>{
            const oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("upload").files[0]);
            oFReader.onload = function (oFREvent) {
                document.getElementById("PDFfile").src = oFREvent.target.result;
                newImage = oFREvent.target.result;
            };
        })
    })

  

</script>