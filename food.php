<?php
session_start(); // Start the session

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Handle cases where the user is not logged in
    $username = "Guest"; // Set a default or anonymous username
}
?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="donate/food.css">
    <link rel="website icon" type="png" href="./images/icon.png">
    <title>Aid Alliance | Food Donation</title>

    <style>
        /*dropdown menu for login*/
.dropdown {
    float: left;
    overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: black;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

/* Add a black background to the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: white;
    text-decoration: underline;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    font-size:15px;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
    background-color: #ddd;
    text-decoration: underline;
}

/* Show the dropdown menu when the dropdown button is hovered over */
.dropdown:hover .dropdown-content {
    display: block;
}

    </style>


</head>

<body>
    <!--HEADER PART-->
    <header class="header">
        <a href="index.php" class="logo"><img src="./images/icon.png" style="height: 50px; width: 50px;"> <span class="logo2" >Aid </span><span style="padding-left:5px;">Alliance</span></a>
        <nav class="navbar">
        <ul>
                <li><a href="index.php #home">HOME</a></li>
                <li><a href="index.php #about">ABOUT</a></li>
                <li><a href="index.php #category">CATEGORY</a></li>
                <li><a href="index.php #ourwork">OUR WORK</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
                <div class="dropdown">
                <li><button class="dropbtn"><ion-icon name="person" style="padding-right:5px;"></ion-icon><?php echo $username; ?></button></li>
                <div class="dropdown-content">
                <a href="viewDonation.php">View Donations</a>
                <a href="#">Service 2</a>
                <a href="#" onclick="confirmLogout()">Logout</a>
                </div>
                </div>


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
        <h1 class="titlehead">FOOD DONATION</h1>
    </div>

    <section>
        <div class="donate-class">

            <form action="catogories-function/foodfunction.php" method="post">

                <div class="row">

                    <div class="col">

                        <h3 class="title">DONATE</h3>

                        <div class="inputBox">
                            <span>Full name :</span>
                            <input type="text" placeholder="Your Name" name="fullname" required>
                        </div>
                        <div class="inputBox">
                            <span>Contact :</span>
                            <input type="text" placeholder="Your contact" name="contact" required>
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
                        <div class="inputBox">
                            <span>Type of food :</span>
                            <!--<input type="text" placeholder="Food type">-->
                            <select name="type" class="drop1" name="type">
                                <option value="packed">Packed</option>
                                <option value="cooked">Cooked</option>
                                <option value="grocery">Grocery</option>
                            </select>
                        </div>
                    </div>

                    <div class="col">

                        <div class="inputBox">
                            <span>Food Description :</span>
                            <input type="text" placeholder="Description" style="width:450px; height: 50px;" name="description" required>
                        </div>
            
                        <div class="inputBox">
                            <span>Best before :</span>
                            <input type="text" placeholder="month" name="bestbefore" required>
                        </div>


                    </div>

                </div>

                <input type="submit" value="SUBMIT" class="submit-btn">

            </form>

        </div>
    </section>


    <!-- Bottom Footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>DonationWebsite</h4>
                    <ul>
                        <li><a href="#about">about us</a></li>
                        <li><a href="#category">Categories</a></li>
                        <li><a href="#ourwork">What we do</a></li>
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
    <script>
        function confirmLogout() {
            if (confirm("Are you sure you want to log out?")) {
                // If the user confirms, redirect to the logout script
                window.location.href = "logout.php"; // Replace with the actual URL for logging out
            }
            // If the user cancels, do nothing
        }
    </script>


    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="donate/script.js"></script>
</body>