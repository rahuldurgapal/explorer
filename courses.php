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
            <h1>Courses
            </h1>
        </div>
    </section>
     <!-- COURSES -->
    <section class="course">
        <h1>Insights of Courses</h1>
        <p>"Your Academic Compass: Notes, Papers, and Expertise Tailored for Your Success."
        </p>
        <div class="row">
            <div class="course-col">
                <a href="MCAcontent.php">
                <h3>MCA</h3>
                <p>Provide a detailed overview of the MCA program, including its duration, eligibility criteria,
                    admission process, and the subjects covered throughout the course. </p>
                </a>
            </div>

            <!-- <div class="course-col">
                <a href="MBAcontent.html">
                <h3>MBA</h3>
                <p>Provide a comprehensive overview of the MBA program, including its duration, eligibility criteria,
                    admission process, and the core areas of study.</p>
                </a>
                </div> -->

            <!-- <div class="course-col">
                <a href="BBAcontent.html">
                <h3>BBA</h3>
                <p>"Navigating Success in Business: Your Pathway to Excellence with Explorer's BBA Resources on
                    Explorer.Providing all inforations like, its duration, eligibility criteria.
                </p>
                </a>
            </div> -->
            <div class="course-col">
                <a href="BCAcontent.php">
                <h3>BCA</h3>
                <p>"Unveiling the Digital Realm: Empowering Futures with Explorer's BCA Insights - Explore, Code,
                    Achieve.
                    Providing all inforations like, its duration, eligibility criteria."</p>
                </a>
                </div>
        </div>
        <div class="space"></div>
    </section>
    <!-- services -->
    <section id="background" class="services">
        <h1>Services we offer</h1>
        <p>"Comprehensive services catering to all your needs." </p>
        <div class="row">
            <div class="services-col">
                <img src="image/pdf.jpg" alt="">
                <h3>PDF Files</h3>
                <p>"Access a wealth of knowledge at your fingertips with our downloadable PDF files, covering a spectrum
                    of topics to support your learning journey."</p>
            </div>

            <div class="services-col">
                <img src="image/resources.jpg" alt="">
                <h3>Every Resources for Study</h3>
                <p>"Empowering your education with a comprehensive repository of resources and study materials, ensuring
                    your academic success is within reach.".</p>
            </div>
            <div class="services-col">
                <img src="image/paper1.jpg" alt="">
                <h3>Previous Year Papers</h3>
                <p>"Boost your exam preparation with our repository of previous year's exam papers, offering valuable
                    insights and practice for a confident performance."</p>
            </div>
        </div>
    </section>
    <div class="space"></div>
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
        window.addEventListener("load", function(){
            loader.style.display = "none";
        })
    </script>
</body>

</html>