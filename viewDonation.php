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
    <title>Aid Alliance | View Donaiton</title>

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

        form {  
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top:10px;
            margin-bottom:30px
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        .btn {
    width: 100px;
    background-color: black;
    border: none;
    outline: none;
    height: 25px;
    border-radius: 49px;
    color: white;
    text-transform: uppercase;
    font-weight: 600;
    margin: 10px 10px;
    cursor: pointer;
    transition: 0.5s;
}

.btn:hover {
    background-color: var(--whitish);
    color: black;
    border: 2px solid black;
}
.searchtext{
    font-size: 15px;
    color: var(black);
    margin-bottom: 10px;
}

input {
    width: 200px;
    background-color: #f0f0f0;
    height: 30px;
    border-radius: 55px;
    padding: 0 0.4rem;
}

.dono{
    text-align:center;
    font-size:14px;
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
                <a href="index.php">Home Page</a>
                <a href="#" onclick="confirmLogout()">Logout</a>
                </div>
                </div>


            </ul>
        </nav>
        <div class="fas fa-bars"></div>
    </header> 

    <div class="titlediv">
        <h1 class="titlehead">VIEW YOUR DONATION</h1>
    </div>

    
            
        <form method="post" action="">
        <label for="search" class="searchtext">Search by your Name or Contact:</label>
        <input type="text" name="search" id="search" class="input-field" />
        <input type="submit" value="Search" class="btn"/>
    </form>

    <?php
    // Database connection

    $conn = new mysqli('localhost','root','','test');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $search = $_POST["search"];
        
        if (!empty($search)) {

        // Search in the food table
        $sqlfood = "SELECT * FROM food WHERE fullname LIKE '%$search%' OR contact LIKE '%$search%'";
        $resultfood = $conn->query($sqlfood);
        
        // Search in the clothes table
        $sqlclothes = "SELECT * FROM clothes WHERE fullname LIKE '%$search%' OR contact LIKE '%$search%'";
        $resultclothes = $conn->query($sqlclothes);

        // Search in the electronic table
        $sqlelectronic = "SELECT * FROM electronic WHERE fullname LIKE '%$search%' OR contact LIKE '%$search%'";
        $resultelectronic = $conn->query($sqlelectronic);

        // Search in the medicine table
        $sqlmedicine = "SELECT * FROM medicine WHERE fullname LIKE '%$search%' OR contact LIKE '%$search%'";
        $resultmedicine = $conn->query($sqlmedicine);

        // Search in the stationary table
        $sqlstationary = "SELECT * FROM stationary WHERE fullname LIKE '%$search%' OR contact LIKE '%$search%'";
        $resultstationary = $conn->query($sqlstationary);

        // Search in the household table
        $sqlhousehold = "SELECT * FROM household WHERE fullname LIKE '%$search%' OR contact LIKE '%$search%'";
        $resulthousehold = $conn->query($sqlhousehold);

        // Search in the money table
        $sqlmoney = "SELECT * FROM donation WHERE fullname LIKE '%$search%' OR contact LIKE '%$search%'";
        $resultmoney = $conn->query($sqlmoney);

        $filteredData = array();
        $filteredData2 = array();
        $filteredData3 = array();
        $filteredData4 = array();
        $filteredData5 = array();
        $filteredData6 = array();
        $fulteredData7 = array();


        if ($resultfood->num_rows > 0) {
            while ($row = $resultfood->fetch_assoc()) {
                $filteredData[] = $row;
            }
        }

        if ($resultclothes->num_rows > 0) {
            while ($row2 = $resultclothes->fetch_assoc()) {
                $filteredData2[] = $row2;
            }
        }

        if ($resultelectronic->num_rows > 0) {
            while ($row3 = $resultelectronic->fetch_assoc()) {
                $filteredData3[] = $row3;
            }
        }

        if ($resultmedicine->num_rows > 0) {
            while ($row4 = $resultmedicine->fetch_assoc()) {
                $filteredData4[] = $row4;
            }
        }

        if ($resultstationary->num_rows > 0) {
            while ($row5 = $resultstationary->fetch_assoc()) {
                $filteredData5[] = $row5;
            }
        }

        if ($resulthousehold->num_rows > 0) {
            while ($row6 = $resulthousehold->fetch_assoc()) {
                $filteredData6[] = $row6;
            }
        }

        if ($resultmoney->num_rows > 0) {
            while ($row7 = $resultmoney->fetch_assoc()) {
                $filteredData7[] = $row7;
            }
        }

        if (empty($filteredData)) {
            $filteredData = array(); // No results found.
        }
        if (empty($filteredData2)) {
            $filteredData2 = array(); // No results found.
        }
        if (empty($filteredData3)) {
            $filteredData3 = array(); // No results found.
        }
        if (empty($filteredData4)) {
            $filteredData4 = array(); // No results found.
        }
        if (empty($filteredData5)) {
            $filteredData5 = array(); // No results found.
        }
        if (empty($filteredData6)) {
            $filteredData6 = array(); // No results found.
        }
        if (empty($filteredData7)) {
            $filteredData7 = array(); // No results found.
        }

    }
}

    

    $conn->close();
    ?>

    <?php if (!empty($filteredData)) { ?>
    <h3 class="dono" style="margin-top:30px;">Food Donation</h3>
    <table border="1">
        <tr>
            <th>Full Name</th><th>Contact</th><th>Address</th><th>State</th><th>Zip code</th><th>Type</th><th>Description</th><th>Best Before</th><th>Status</th>
        </tr>
        <?php foreach ($filteredData as $row) { ?>
            <tr>
                <td><?php echo $row["fullname"]; ?></td>
                <td><?php echo $row["contact"]; ?></td>
                <td><?php echo $row["address"]; ?></td>
                <td><?php echo $row["state"]; ?></td>
                <td><?php echo $row["zip"]; ?></td>
                <td><?php echo $row["type"]; ?></td>
                <td><?php echo $row["description"]; ?></td>
                <td><?php echo $row["bestbefore"]; ?></td>
                <td><?php echo $row["stat"]; ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php } ?>
    
    
    <?php if (!empty($filteredData2)) { ?>
    <h3 class="dono">Clothes Donation</h3>
    <table class="pad" border="1">
        <tr>
        <th>Full Name</th><th>Contact</th><th>Address</th><th>State</th><th>Zip code</th><th>Type</th><th>Description</th><th>Gender</th><th>Status</th>
        </tr>
        <?php foreach ($filteredData2 as $row2) { ?>
            <tr>
                <td><?php echo $row2["fullname"]; ?></td>
                <td><?php echo $row2["contact"]; ?></td>
                <td><?php echo $row2["address"]; ?></td>
                <td><?php echo $row2["state"]; ?></td>
                <td><?php echo $row2["zip"]; ?></td>
                <td><?php echo $row2["type"]; ?></td>
                <td><?php echo $row2["description"]; ?></td>
                <td><?php echo $row2["gender"]; ?></td>
                <td><?php echo $row2["stat"]; ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php } ?>
        </table>
        
    <?php if (!empty($filteredData3)) { ?>
    <h3 class="dono">Electronic Donation</h3>
    <table class="pad" border="1">
        <tr>
        <th>Full Name</th><th>Contact</th><th>Address</th><th>State</th><th>Zip code</th><th>Type</th><th>Description</th><th>Status</th>
        </tr>
        <?php foreach ($filteredData3 as $row3) { ?>
            <tr>
                <td><?php echo $row3["fullname"]; ?></td>
                <td><?php echo $row3["contact"]; ?></td>
                <td><?php echo $row3["address"]; ?></td>
                <td><?php echo $row3["state"]; ?></td>
                <td><?php echo $row3["zip"]; ?></td>
                <td><?php echo $row3["type"]; ?></td>
                <td><?php echo $row3["description"]; ?></td>
                <td><?php echo $row3["stat"]; ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php } ?>
        </table>


        <?php if (!empty($filteredData4)) { ?>
    <h3 class="dono">Medicine Donation</h3>
    
    <table class="pad" border="1">
        <tr>
        <th>Full Name</th><th>Contact</th><th>Address</th><th>State</th><th>Zip code</th><th>Type</th><th>Description</th><th>Expiry</th><th>Status</th>
        </tr>
        
        <?php foreach ($filteredData4 as $row4) { ?>
            <tr>
                <td><?php echo $row4["fullname"]; ?></td>
                <td><?php echo $row4["contact"]; ?></td>
                <td><?php echo $row4["address"]; ?></td>
                <td><?php echo $row4["state"]; ?></td>
                <td><?php echo $row4["zip"]; ?></td>
                <td><?php echo $row4["type"]; ?></td>
                <td><?php echo $row4["description"]; ?></td>
                <td><?php echo $row4["exp"]; ?></td>
                <td><?php echo $row4["stat"]; ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php } ?>
        </table>

        
        <?php if (!empty($filteredData5)) { ?>
    <h3 class="dono">Statioanry Donation</h3>
    
    <table class="pad" border="1">
        <tr>
        <th>Full Name</th><th>Contact</th><th>Address</th><th>State</th><th>Zip code</th><th>Type</th><th>Description</th><th>Status</th>
        </tr>
        
        <?php foreach ($filteredData5 as $row5) { ?>
            <tr>
                <td><?php echo $row5["fullname"]; ?></td>
                <td><?php echo $row5["contact"]; ?></td>
                <td><?php echo $row5["address"]; ?></td>
                <td><?php echo $row5["state"]; ?></td>
                <td><?php echo $row5["zip"]; ?></td>
                <td><?php echo $row5["type"]; ?></td>
                <td><?php echo $row5["description"]; ?></td>
                <td><?php echo $row5["stat"]; ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php } ?>
        </table>

    <?php if (!empty($filteredData6)) { ?>
    <h3 class="dono">Household Donation</h3>
    
    <table class="pad" border="1">
        <tr>
        <th>Full Name</th><th>Contact</th><th>Address</th><th>State</th><th>Zip code</th><th>Type</th><th>Description</th><th>Status</th>
        </tr>
        
        <?php foreach ($filteredData6 as $row6) { ?>
            <tr>
                <td><?php echo $row6["fullname"]; ?></td>
                <td><?php echo $row6["contact"]; ?></td>
                <td><?php echo $row6["address"]; ?></td>
                <td><?php echo $row6["state"]; ?></td>
                <td><?php echo $row6["zip"]; ?></td>
                <td><?php echo $row6["type"]; ?></td>
                <td><?php echo $row6["description"]; ?></td>
                <td><?php echo $row6["stat"]; ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php } ?>
        </table>

    <?php if (!empty($filteredData7)) { ?>
    <h3 class="dono">Money Donation</h3>
    
    <table class="pad" border="1">
        <tr>
        <th>Full Name</th><th>Contact</th><th>Address</th><th>State</th><th>Zip code</th><th>Type</th><th>Description</th><th>Status</th>
        </tr>
        
        <?php foreach ($filteredData7 as $row7) { ?>
            <tr>
                <td><?php echo $row7["fullname"]; ?></td>
                <td><?php echo $row7["contact"]; ?></td>
                <td><?php echo $row7["address"]; ?></td>
                <td><?php echo $row7["state"]; ?></td>
                <td><?php echo $row7["zip"]; ?></td>
                <td><?php echo $row7["bankname"]; ?></td>
                <td><?php echo $row7["amount"]; ?></td>
                <td><?php echo $row7["status"]; ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php } ?>
        </table>


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