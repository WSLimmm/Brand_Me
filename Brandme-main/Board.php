<?php
    session_start();
    include "dbconn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Me.</title>

    <!-- UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/board.css">
</head>
<body>
    <!-- ////////////////////// Header Area ///////////////////////////-->
    <div>
        <head>
            <link rel="stylesheet" href="./css/homestyle.css">
        </head>
        <body>
            <div class="main_Header_Container">
                <nav class="nav container">
                    <a href="home.php" class="nav__logo">Brand Me.</a>
                    <div class="nav_menu">
                        <a href="binary.php" class="nav_items">Portfolio</a>
                        <!-- php로 변경 -->
                        <a href="Board.php" class="nav_items" style="color: #fff;">Board</a>
                        <a href="ContactUs.php" class="nav_items">Contact Us</a>
                        <a href="MyPage.php" class="nav_items">MyPage</a>

                        <?php
                            if (!isset($_SESSION['user_id'])) {
                                echo "
                                    <div class='nav_btn'>
                                        <a href='login.php' class='nav_items'>Login</a>
                                    </div>
                                ";
                            } else {
                                echo "
                                    <div class='nav_btn'>
                                        <a href='logout.php' class='nav_items'>Logout</a>
                                    </div>
                                ";
                            }
                        ?>
                    </div>
                </nav>
            </div>
        </body>
    </div>

    <div class="Board_Container">
        <div class="Board_Search_Area">
            <img src="./img/section1_img2.png" class="section1_img2"/>
            <img src="./img/searchImg.svg" alt class="serchImg"/>
            <img src="./img/bubble_left2.svg" alt class="imgBubble"/>
            <img src="./img/bubble_right2.svg" alt class="imgBubble2"/>
            <div class="Search_SearchBar">
                <!-- form 추가 -->
                <div class="SearchBar_Area">
                    <i class="uil uil-search"></i>
                    <input type="text" class="SearchBar_Input"
                    placeholder="#Backend, #Frontend"/>
                </div>
            </div>
        </div>
        <div class="Board_Content_Container">
            <div class="Board_Content_Area">
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
                <div class="Board_Test"></div>
            </div>
        </div>
    </div>
</body>
</html>