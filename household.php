<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="donate/household.css">
    <link rel="website icon" type="png" href="./images/icon.png">
    <title>Aid Alliance | Household Donation</title>

</head>

<body>
    <!--HEADER PART-->
    <header class="header">
        <a href="index.php" class="logo"><img src="./images/icon.png" style="height: 50px; width: 50px;"> <span class="logo2" >Aid </span><span style="padding-left:5px;">Alliance</span></a>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="index.php #about">ABOUT</a></li>
                <li><a href="index.php #category">CATEGORY</a></li>
                <li><a href="index.php #ourwork">OUR WORK</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
            </ul>
        </nav>
        <div class="fas fa-bars"></div>
    </header>

    <!--Home-->
   <!-- <div class="donate-home">
        <div class="donate-background">
            <div class="donate-content">
                <h1 class="heading">CLOTHES</strong>
                </h1>
            </div>
        </div>
    </div>-->

    <div class="titlediv">
        <h1 class="titlehead">Household Items Donaiton</h1>
    </div>

    <section>
        <div class="donate-class">

            <form action="catogories-function/householdfunction.php" method="post">

                <div class="row">

                    <div class="col">

                        <h3 class="title">DONATE</h3>

                        <div class="inputBox">
                            <span>Full name :</span>
                            <input type="text" placeholder="Your Name" name="fullname" required>
                        </div>
                        <div class="inputBox">
                            <span>Contact :</span>
                            <input type="text" placeholder="Phone number" name="contact" required>
                        </div>
                        <div class="inputBox">
                            <span>Pickup Address :</span>
                            <input type="text" placeholder="room - street - locality" name="address" required>
                        </div>

                        <div class="flex">
                            <div class="inputBox">
                                <span>State :</span>
                                <input type="text" placeholder="State" name="state" required>
                            </div>
                            <div class="inputBox">
                                <span>Zip code :</span>
                                <input type="text" placeholder="123 456" name="zip" required>
                            </div>
                        </div>

                    </div>

                    <div class="col">

                        <div class="inputBox">
                            <span>Type of household item :</span>
                            <input type="text" placeholder="curtains, bedsheets, etc" name="type" required>
                        </div>
                        <div class="inputBox">
                            <span>Item description :</span>
                            <input type="text" placeholder="Description" style="width: 300px;" name="description" required>
                        </div>
                    
                    </div>

                </div>

                <input type="submit" value="Submit" class="submit-btn">

            </form>

        </div>
    </section>


    <!-- Bottom Footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Aid Alliance</h4>
                    <ul>
                        <li><a href="index.php #about">about us</a></li>
                        <li><a href="index.php #category">Categories</a></li>
                        <li><a href="index.php #ourwork">What we do</a></li>
                        <li><a href="#">privacy policy</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a target="_blank" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                        <a target="_blank" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="donate/script.js"></script>
</body>