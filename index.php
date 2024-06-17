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
    <section class="header">
        <?php  
        
        session_start();
        if(isset($_SESSION['std_name']))
        include('header.php');   else{ ?>
           

        <nav>
            <a href="index.php"><img src="icons\new-explorer.png" alt="#"></a>
            <!-- <div class="nav-links" id="navlinks">
                <i class="fa-solid fa-xmark" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="courses.php">Courses</a></li>
                
                    <li><a href="contact.php">Contact</a></li>
                </ul>

            </div>
            <i class="fa-solid fa-bars" onclick="showmenu()"></i> -->
        </nav>

         <?php } ?>
      
        <div class="text-box">
            
        <?php 
          
          if(isset($_SESSION['std_name'])){
           echo "<h2>Welcome</h2>";
           echo '<h1>'. $_SESSION['std_name'] .'</h1>';
          }
          
          else
           echo "<a href='login/' class='hero-btn'> Sign in >> </a>";
           ?>
           <h2>Unlocking knowledge,Empowering Futures
            </h2>
            <p> "Empowering RSMT Students Through Knowledge: <span>Your Ultimate Academic Explorer </span> <br> Discover Notes,
                Papers, and Insights for MCA, BBA, BCA, and MBA Courses."
            </p>
          
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
                </div>

            <div class="course-col">
                <a href="BBAcontent.html">
                <h3>BBA</h3>
                <p>"Navigating Success in Business: Your Pathway to Excellence with Explorer's BBA Resources on
                    Explorer.Providing all inforations like, its duration, eligibility criteria.
                </p>
                </a>
            </div>  -->
            <div class="course-col"> 
                <a href="BCAcontent.php">
                <h3>BCA</h3>
                <p>"Unveiling the Digital Realm: Empowering Futures with Explorer's BCA Insights - Explore, Code,
                    Achieve.
                    Providing all inforations like, its duration, eligibility criteria."</p>
                </a>
                </div>
        </div>
    </section>
    <!-- campus -->
    <section class="campus">
        <h1>Get Placement Ready</h1>
        <p>"Transform potential into professionalism with our expertly crafted placement guidelines, <br> ensuring you
            shine in every career opportunity."</p>
        <div class="row">
            <div class="campus-col">
                <a href="programming.php">
                <img src="image/langauge.jpg" alt="">
                <div class="layer">
                    <h3>Programming langauge</h3>
                </div>
                </a>
            </div>
            <div class="campus-col">
                <a href="DSA.php">
                <img src="image/DSA.jpg" alt="">
                <div class="layer">
                    <h3>DSA <br> Data Structure</h3>
                </div>
                </a>
            </div>
            <div class="campus-col">
                <a href="interview.php">
                <img src="image/interview.jpg" alt="">
                <div class="layer">
                    <h3>Job <br> Interview</h3>
                </div>
            </a>
            </div>
        </div>

    </section>
    <!-- services -->
    <section id="background" class="services">
        <h1>Services we offer</h1>
        <p>"Comprehensive services catering to all your needs." </p>
        <div class="row" id="services">
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
    <!-- Testomonials -->
    <section class="testomonials">
        <h1>Recommendation of Faculty Members</h1>
        <p>"Endorsed by our esteemed faculty members, Explorer is your trusted academic companion."</p>
        <div class="row">
            <div class="testomonials-col">
                <img src="image/sanjay.jpg" alt="">
                <div>
                    <p>"Endorsed by our faculty, Explorer is your educational companion, providing essential resources
                        to excel in your studies."</p>
                    <h3>Prof. Sanjay kumar Singh </h3>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Call To Action -->
    <?php
     if(!isset($_SESSION['std_name']))
     {
   ?>
    <section class="cta">
        <h1>Please Login to access our exclusive range of resources and <br> unlock a world of knowledge tailored to
            your educational journey.</h1>
        <a href="login/" class="hero-btn"> Login Now</a>
    </section>
    <?php  } ?>
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