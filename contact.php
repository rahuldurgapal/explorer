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
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
                </ul>

            </div> -->
            <i class="fa-solid fa-bars" onclick="showmenu()"></i>
        </nav>

        <?php } ?>
    <div class="text-box">
        <h1>Contact us
        </h1>
    </div>
</section>

    <!-- Contact Us -->
    <section class="location">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.4451407639835!2d82.9719557!3d25.3563936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e2c4a7c7fc5d7%3A0x2740d1af6c1197a7!2sRSMT%20Up%20College%20Campus!5e0!3m2!1sen!2sin!4v1693117088083!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section class="contact us" id="contact">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa-solid fa-house"></i>
                    <span>
                        <h5>Rajarshi School of Management and Technology</h5>
                        <p>Up College , bhojubeer Varanasi Uttar Pradesh</p>
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <span>
                        <h5>+1 02255443687687</h5>
                        <p>Monday to Saturday, at 10AM to 6AM</p>
                    </span>
                </div>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <span>
                        <h5>explorersmt@gmail.com</h5>
                        <p>Email us for any Query</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="formhandeler.php" method="post">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Enter your Email" required>
                    <input type="text" name="Subject" placeholder="Enter your Subject" required>
                    <textarea rows="10" name="Message" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn red-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Call To Action -->
   
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