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
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <div id="preloader"></div>
    <section class="sub-header" id="profile">
        <nav>
            <a href="index.html"><img src="icons\new-explorer.png" alt="#"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa-solid fa-xmark" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="notification.html">Notifications</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>

            </div>
            <i class="fa-solid fa-bars" onclick="showmenu()"></i>
        </nav>
    </section>
    <!-- About us content -->
    <section class="profile-view" >
        <div class="row" id="profile-box">
            <div class="profile-col">
                <img src="image/profileImg.jpg" alt="">
            </div>
            <div class="profile-col" id="pro-box1">
                <div class="introduction">
                    <span>Indroduction</span>
                    <hr>
                    <div class="introduction-row">

                        <span>
                            <h5>Candidate Name</h5>
                            <p>Saloni Singh Raghuvanshi</p>
                        </span>

                        <span>
                            <h5>Phone Number</h5>
                            <p>989899986</p>
                        </span>
                        <span>
                            <h5>Email Id</h5>
                            <p>explorersmt@gmail.com</p>
                        </span>
                    </div>
                    <div class="introduction-row">
                        
                            
                                <h5>Address</h5>
                                <p>Up College , bhojubeer Varanasi Uttar Pradesh</p>
                           
                            
                                <h5>Date of birth</h5>
                                <p>23/08/2023</p>
                            
                            <span>
                                <h5>Other accounts</h5>
                                <p>Google</p>
                            </span>
                        
                    </div>
                    <div class="introduction">
                        <span>About </span>
                        <hr>
                        <p>At Explorer, we are committed to revolutionizing your learning experience. As an unofficial
                            platform
                            dedicated to RSMT students, we provide a comprehensive array of notes, previous year papers,
                            and
                            insightful materials for MCA, BBA, BCA, and MBA courses.</p>
                    </div>
                </div>
            </div>
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