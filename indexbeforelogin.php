<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="website icon" type="png" href="./images/icon.png">
    <title>Aid Alliance</title>

    <style>
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .popupcontent {
            background-color: #fff;
            padding: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); 
            text-align: center;
            border:5px solid black;
            margin: 20px;
        }

        .popupcontent .poptitle{
            font-size:40px;
            padding-bottom:20px;
        }

        .popupcontent .poppara{
            font-size:20px;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 30px ;
            cursor: pointer;
        }


        .buton {
        height: 50px;
        width: 100px;
        background: none;
        outline: none;
        border: 2px solid black;
        color: black;
        font-size: 20px;
        margin: 20px 0;
        cursor: pointer;
        overflow: hidden;
        z-index: 0;
        position: relative;
        }

        .buton:hover{
        background: black;
        color: white;
        }
    </style>

</head>

<body>

    <!--HEADER PART-->
    <header class="header">
        <a href="indexbeforelogin.php" class="logo"><img src="./images/icon.png" style="height: 50px; width: 50px;"> <span class="logo2" >Aid </span><span style="padding-left:5px;">Alliance</span></a>
        <nav class="navbar">
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#category">CATEGORY</a></li>
                <li><a href="#ourwork">OUR WORK</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
                <li><a href="htdocs/account.php" class="user"><ion-icon name="person"></ion-icon> Login</a></li>
            </ul>
        </nav>
        <div class="fas fa-bars"></div>
    </header>

    <!--HOME PAGE SECTION-->
    <section class="home" id="home">
        <div class="content">
            <h2>Welcome To the</h2>
            <h1>Aid Alliance</h1>
            <p style="padding-top: 10px; font-weight: bold">Lets Donate and make someone's future!</p>
        </div>
    </section>

    <!--About Us Section-->
    <section class="about" id="about">
        <h1 class="heading">About Us</h1>
        <div class="row">
            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>"No One Has Ever Become Poor From Giving"</h3><br>
                <p>In today's world, the rate of poverty is on the rise due to various factors like pandemic, job losses, economic inequality, etc. There are many people in the society who genuinely needs help. They can be helped by providing them the things which the donors wish to donate like food, clothes, various gadgets, etc. We aim to develop this website to help those needy people in our society. For example, if a donor want to donate their old clothes, they can login in our website and donate it to us. We will collect the donation and donate it to those people in our society who are in need. Donation websites are essential because they streamline the process of giving, making it easier for individuals and organizations to contribute to various causes.</p>
                <p class="interest">Interested in being a part of our mission ? Donate now and change someones life!!!</p>
            </div>
        </div>
    </section>

    <!--Category Section-->
    <section class="category" id="category">
        <h1 class="heading">Donation Categories</h1>
        <div class="box-container">
            <div class="box">
                <a href="javascript:void(0);" onclick="openPopup()">
                <img src="images/food.jpg" alt="Food donation image">
                <div class="tooltip">Food</div>
                </a>
            </div>
            

            <div class="box">
                <a href="javascript:void(0);" onclick="openPopup()">
                <img src="images/clothes.jpeg" alt="clothes donation images">
                <div class="tooltip">Clothes</div>
                </a>
            </div>

            <div class="box">
                <a href="javascript:void(0);" onclick="openPopup()">
                <img src="images/hardware.jpeg" alt="hardware donation image">
                <div class="tooltip">Electronics</div>
                </a>
            </div>

            <div class="box">
                <a href="javascript:void(0);" onclick="openPopup()">
                <img src="images/money.jpeg" alt="money donation image">
                <div class="tooltip">Money</div>
                </a>
            </div>
            <div class="box">
                <a href="javascript:void(0);" onclick="openPopup()">
                <img src="images/medicine.jpg" alt="medicine donation image">
                <div class="tooltip">Medicine</div>
                </a>
            </div>
            <div class="box">
                <a href="javascript:void(0);" onclick="openPopup()">
                <img src="images/stationary.jpeg" alt="Stationary donation image">
                <div class="tooltip">Stationary</div>
                </a>
            </div>
            <div class="box">
                <a href="javascript:void(0);" onclick="openPopup()">
                <img src="images/bed.jpg" alt="Household donation image">
                <div class="tooltip">Household Items</div>
                </a>
            </div>
            
    </section>



    <!--Our Work Section-->
    <section class="ourwork" id="ourwork">
        <h2 style="padding-up:50px">Our Work</h2>
        <p>our primary mission is to facilitate charitable giving and make a positive <br>impact on various causes and communities. We provide a user-friendly online platform<br> that connects generous donors with a wide range of  charitable organizations and initiatives.<br><br>Donate Items <a href=#category>Here </a></p>
    </section>
    <!--Donate Section-->
    <div class="section-container">
        <div class="columns image" style="background-image:url('images/donate1.jpg')">
            &nbsp;
        </div>
        <div class="columns content">
            <div class="content-container">
                <h5>DONATE</h5>
                <p>
                    These innocent eyes have been deluded by darkness,the rude and cruel world has shadowed the bright future ahead of them.Its our responsibilty to help them reach their daily needs and life-changing goals. We are joining hands with the NGO to help make this
                    world a better place for everyone.
                </p>
                <p>
                    Donation in any form can change the world ahead,join us in this revolution to donate clothes, medicines, hardware, stationary and linnen to needy ones to open their eyes to a world full of color,to a world where everyone lives to their terms,to a world where kindness is promoted and
                    togetherness is cherrished.<br><br>
                    <a href="#category" class="donation-link"> DONATE</a> TODAY !
                </p>
            </div>
        </div>
    </div>
    <!--WRITE TO US Section-->
    <section class="write" id="write">
        <header class="header1">
            <p>WRITE TO US : <a href="feedback.php">aidalliance@gmail.com</a></p>
        </header>
    </section>
    <!-- Bottom Footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Aid Alliance</h4>
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

    <!-- The Modal -->
    <div id="pleaseLogin" class="popup">
        <div class="popupcontent">
            <span class="close" onclick="closePopup()">&times;</span> <!-- &times is used to display the cross to exit -->
            <h2 style="padding-ip:50px;" class="poptitle">Login Required</h2>
            <p class="poppara">We appreciate your willingness to donate. <br>You are just one step away <br>Log in to access our donation feature and help us to make an impact in someones life</p>
            <form action="./htdocs/account.php">
            <input type="submit" class="buton" value="Login">
            </form>

        </div>
    </div>

    <script>
        // JavaScript to open and close the modal
        function openPopup() {
            document.getElementById('pleaseLogin').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('pleaseLogin').style.display = 'none';
        }
    </script>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <script src="script.js"></script>
</body>

</html>