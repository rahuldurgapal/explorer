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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <div id="preloader"></div>
    <section class="sub-header">

    <?php  
        
        session_start();
        if(isset($_SESSION['std_name']))
        include('header.php');   else{ ?>

        <nav>
            <a href="index.php"><img src="icons\new-explorer.png" alt="#"></a>
            <!-- <div class="nav-links" id="navlinks">
                <i class="fa-solid fa-xmark" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="courses.php" class="active">Courses</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>

            </div> -->
            <i class="fa-solid fa-bars" onclick="showmenu()"></i>
        </nav>

        <?php } ?>
        <div class="text-box">
            <h1>DSA (Data Structure & Algorithm)
            </h1>
        </div>
    </section>
    <!-- About us content -->
    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>Learn DSA Completely</h1>
                <p>Best resource for complete DSA </p>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/5_5oE5lgrhw?si=imPaPt_Ph2AvyIWF"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/i0ovgS-jCQ8?si=RMc4SM2TdZNPjC6n"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <section class="container">
                <div id="paper">
                    <div class="style">
                        <h2>Some important notes which help you for revision</h2>
                    </div>
                    <h3>For DSA Questions</h3>
                    <p>Paper1</p>
                    <a href="Pdf files/Automata.pdf" download class="hero-btn red-btn">Download</a>
                    <p>Paper2</p>
                    <a href="Pdf files/Automata (2).pdf" download class="hero-btn red-btn">Download</a>
                    <p>Paper3</p>
                    <a href="Pdf files/Automata (3).pdf" download class="hero-btn red-btn">Download</a>
                    <p>Paper4</p>
                    <a href="Pdf files/Automata (4).pdf" download class="hero-btn red-btn">Download</a>
                    <p>Paper5</p>
                    <a href="Pdf files/Automata (5).pdf" download class="hero-btn red-btn">Download</a>
                </div>
            </section>
    </section>
    <!-- Footer -->
    <?php include("footer.php");  ?>





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

</html>