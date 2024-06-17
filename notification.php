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
        <nav>
            <a href="index.html"><img src="icons\new-explorer.png" alt="#"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa-solid fa-xmark" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="notification.html" class="active">Notifications</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>

            </div>
            <i class="fa-solid fa-bars" onclick="showmenu()"></i>
        </nav>
        <div class="text-box">
            <h1>Notifications</h1>
        </div>
    </section>
   <!-- Blog Page content -->
   <section class="blog-content">
    <div class="row">
        <div class="blog-left">
            <img src="image/notification.jpg" alt="">
            <h2>New Update Regarding Examination--</h2>
            <span>09/01/2023</span>
            <p>Lorem ipsum dolor sit auibusdam, dignissimos. Obcaecati magnam possimus quis aspernatur. Eos dicta
                nesciunt sed temporibus voluptates ratione fugiat quam reprehenderit?
            </p>
            <h2>Start College Practicals--</h2>
            <span>22/08/2023</span>
            <p>Lorem ipsum dolor sit auibusdam, dignissimos. Obcaecati magnam possimus quis aspernatur. Eos dicta
                nesciunt sed temporibus voluptates ratione fugiat quam reprehenderit?
            </p>
            <h2>Last Submission for Documents--</h2>
            <span>02/04/2023</span>
            <p>Lorem ipsum dolor sit auibusdam, dignissimos. Obcaecati magnam possimus quis aspernatur. Eos dicta
                nesciunt sed temporibus voluptates ratione fugiat quam reprehenderit?
            </p>
            <h2>Complete and check notes--</h2>
            <span>03/02/2023</span>
            <p>Lorem ipsum dolor sit auibusdam, dignissimos. Obcaecati magnam possimus quis aspernatur. Eos dicta
                nesciunt sed temporibus voluptates ratione fugiat quam reprehenderit?
            </p>
           
            <div class="comment-box">
                <h3>Leave a comment</h3>
            <form class="comment-form">
                <input type="text" placeholder="Enter name">
                <input type="email" placeholder="Enter email">
                <textarea rows="5" placeholder="Your Comment"></textarea>
                 <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
            
            
            </form>
            </div>
        </div>
        <div class="blog-right">
            <h3>College Timing </h3>
            <div>
                <span>MCA Students</span>
                <span>10:00am to 5:00pm</span>
            </div>
            <div>
                <span>BCA Students</span>
                <span>10:00am to 3:00pm</span>
            </div>
            <div>
                <span>BBA Students</span>
                <span>10:00am to 4:00pm</span>
            </div>
            <div>
                <span>MBA Students</span>
                <span>10:00am to 5:00pm</span>
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
        window.addEventListener("load", function(){
            loader.style.display = "none";
        })
    </script>
</body>

</html>