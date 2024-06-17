<?php

   session_start();
        if(isset($_SESSION['std_name'])){

            ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorer-RSMT</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,700;0,800;1,800&family=Poppins:wght@100;200;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style>
        /* Style for the layout */
        .container {
            display: flex;
            padding: 50px;
            width: 80%;
        }
         .heading{
            margin-top: 40px;
            margin-left: 50px;
            margin-bottom: 0;
         }
        .column {
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
        }
        
        .column:first-child {
            flex: 0.3;
            margin-right: 8px;
            height: 50%;
            width: 25%;
        }

        .column:last-child {
            flex: 2;
        }

        /* Style for the links in the first column */
        .links {
            text-decoration: none;
            margin: 10px 0;
            background-color: #007BFF;
            padding: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            color: #fff;
        }

        .links a {
            color: #fff;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }

        /* Style for the user details in the second column with borders */
        .user-details {
            font-size: 18px;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
        }
        #pfimage{
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background: #512DA8;
  font-size: 40px;
  color: #fff;
  text-align: center;
  line-height: 150px;
  margin: 20px 0;
}
        .user-details strong {
            color: #5c5c5c;
        }
        .user-details p {
            color: #000000;
            margin: 10px 0;
            border: 1px solid #ccc; /* Add a border below each detail */
            border-radius: 20px;
            padding: 20px 20px;
        }

        .user-details h2 {
            font-size: 24px;
            color: #007BFF;
        }

        .details-section {
            padding: 20px;
        }
        .profile-picture {
            width: 100px; /* Set the width of the picture */
            height: 100px; /* Set the height of the picture */
            border-radius: 50%; /* Make it circular */
        }
        .detail-icon {
            margin-right: 10px; /* Add some spacing between the icon and text */
         color: #002144;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .column {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div id="preloader"></div>
    <section class="sub-header">
        <?php  

     
        $name = $_SESSION['std_name'];
        include('header.php');   
        include("Admin/app/db_connection.php");
        $sql = "select * from students where student_name='$name'";
        $q=mysqli_query($con,$sql);
        $res=mysqli_fetch_assoc($q);
         ?>

        <!-- <nav>
            <a href="index.php"><img src="icons\new-explorer.png" alt="#"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa-solid fa-xmark" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    
                    <li><a href="contact.php">Contact</a></li>
                </ul>

            </div> 
            <i class="fa-solid fa-bars" onclick="showmenu()"></i> 
        </nav> -->
        
 
</section>
    <h1 class="heading">Account :</h1>
    <div class="container">
        <div class="column">
            <div class="links">
                <a href="#" > <i class="fas fa-user detail-icon"></i>My account</a>
            </div>
            <div class="links">
                <a href="#"> <i class="fas fa-edit detail-icon"></i>Edit</a>
            </div>
            <div class="links">
                <a href="./login/logout.php"> <i class="fas fa-power-off detail-icon"></i>Logout</a>
            </div>
        </div>
        <div class="column">
            <div class="user-details">
                <div class="details-section">
                     <!-- <img class="profile-picture" src="image//profile-picture.jpg" alt="Profile Picture">-->
                     <div id="pfimage"></div>
                    <h2>User Details</h2>
                    <p id="fname"><i class="fas fa-user detail-icon"></i> <strong>Name:</strong> <?php echo $res['student_name'];  ?></p>
                    <p><i class="fas fa-envelope detail-icon"></i> <strong>Email:</strong> <?php echo $res['student_email'];  ?></p>
                    <p><i class="far fa-eye"></i> <strong>Password:</strong><?php echo $res['student_password']; ?> </p>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include("footer.php");  ?>

    <!-- javascript -->
    <script src="script.js"></script>
    <script>
        var navlinks = document.getElementById("navlinks");
        function showmenu() {
            navlinks.style.right = "0";
        }
        function hidemenu() {
            navlinks.style.right = "-200px";
        }
    </script>
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function(){
            loader.style.display = "none";
        })

    $(document).ready(function(){
        var fname = $('#fname').text();
        console.log(fname);
        var initial = $('#fname').text().charAt(7);
        var profile = $('#pfimage').text(initial);
    });
    </script>
</body>
</html>
<?php }

else
 header("location: index.php");
?>