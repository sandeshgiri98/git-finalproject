<!DOCTYPE html>
<html>

<head>
    <title>Welcome to Our Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="header">
        <span class="nav_left">
            <img class="sliders" src="slider/logo3.svg" alt=""
                style="width: 60px; height: 50px; margin-right: 300px;" />
        </span>
        <nav>
            <ul class="nav_ul">
                <span>
                    <li><a href="#" class="ab">Complaints</a></li>
                </span>
                <span>
                    <li><a href="#" class="ab">About Us</a></li>
                </span>
            </ul>
        </nav>


        <!-- <span class="nav_right">
      <form action="">
          <input type="search" placeholder="Search.." />
          <a href="">
              <span class="search_notif">
                  <img class="sliders"src="slider/search.png" alt="" style="width: 1.1rem; height: 1.1rem; margin: 0px 3px 0px 5px" />
                  
              </span>
          </a>

          <a href="">
              <span class="search_notif">
                  <img src="photoes/addtocart.svg" alt="" style="width: 1.2rem; height: 1.2rem;margin: 0px px 0px 5px" />
                  <span id="count">

                  </span>
              </span>
          </a>
      </form> -->
        </span>
        <div class="login_register">
            <div>
                <a href="../login/login.php" id="login_button">Login</a></p>
            </div>
            <div>
                <a href="../register/egister.php" id="register_button">Register</a></p>
            </div>
        </div>
    </div>


    <div class="container">
        <h1>Welcome to Complaint Management System</h1>

        <section class="hero">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h2 class="hero-heading">Discover the Power of Our Platform</h2>
                <p align="justify" class="hero-description">We value your feedback and are committed to resolving any
                    issues you may encounter. Our complaint management system ensures a seamless process for submitting
                    and tracking your complaints.</p>

            </div>
        </section>

        <section class="feature-section">
            <div class="feature-image">
                <img src="../photoes/complaint.jpg" alt="Feature Image" style="width:600; height:auto;">
            </div>
            <div class="feature-content">
                <h2 class="feature-heading">Powerful Features</h2>
                <p align="justify" class="feature-description">Introducing our Complaint Management System at
                    Southwestern State College – a platform where students and teachers can express their concerns
                    freely. We understand the importance of addressing issues promptly and maintaining a supportive
                    learning environment. Our system allows individuals to voice their complaints, ensuring their
                    feedback is heard and appropriate actions are taken. We value open communication and strive to
                    resolve any problems efficiently, fostering a positive educational experience for all. Together,
                    let's build a community where concerns are addressed and solutions are implemented.</p>
            </div>
        </section>

        <section class="complaint-section">
            <h2>Top Complaints</h2>
            <div class="complaint">
                <p class="complaint-content">"An extra amount of 1500 is collected for regular exams, while for back
                    papers, an additional hundred is charged."</p>
                <p class="complaint-author">- Ram Thapa</p>
            </div>
            <div class="complaint">
                <p class="complaint-content">"Students are not allowed to take exams without clearing all the dues on
                    their accounts, which is not appropriate."</p>
                <p class="complaint-author">- Rohit Basnet</p>
            </div>
        </section>

        <section class="complaint-section">
            <h2 class="section-heading">Submit Your Complaint</h2>
            <p class="section-description">The Fastest Way to make your Complaint.</p>
            <div class="button-container">
                <a href="../login/login.php" class="button">Submit a Complaint</a>
            </div>
        </section>

    </div>

    <div id="upperArrow">
        <img src="../photoes/circle-up-solid.svg" alt="" class="to-top">
        <script src="frontpage.js"></script>
    </div>

    <footer>
        &copy; BCA 4th sem Project by Sandesh Giri and Asmita Darlami
    </footer>


</body>

</html>