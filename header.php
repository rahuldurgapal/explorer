<!-- <!DOCTYPE html>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head> -->

<!-- <body>
    <div id="preloader"></div>
    <section class="sub-header" id="profile" > -->
        <!-- It is a Bootstrap CSS Link -->

   
        <nav>
            <a href="index.php"><img src="icons\new-explorer.png" alt="#"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa-solid fa-xmark" onclick="hidemenu()"></i>
                <ul>
                  
                    <li><a href="index.php" >Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="books/index.php">Books</a></li>
                    <li><a href="notes/index.php">Notes</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                      <li><a href="MyAccount.php"><?php  echo $_SESSION['std_name']; ?></a></li>
                </ul>

            </div>
            <i class="fa-solid fa-bars" onclick="showmenu()"></i>
        </nav>

<style>
    .btn{
        padding: 10px;
        background-color: rgb(163, 71, 5);
        color: white;
        border-radius: 20px;
    }
</style>
      

    <!-- </section>  
    <section>
        <div class="space"></div>
    </section> -->

   



    <!-- Javascript -->
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
        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>

</body>

<!-- </html> -->