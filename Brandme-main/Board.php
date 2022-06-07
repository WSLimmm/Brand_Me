<?php
    session_start();
    include "dbconn.php";
    
    if (!isset($_SESSION['user_id'])) {

        // 로그인이 되어있지 않을 시 뒤로 페이지로 이동.
        echo "
            <script>
                window.alert('로그인 후 이용해 주세요.')
                location.replace('home.php');
            </script>
            ";
    }

    $search = $_POST['search'];

    $board_select = "SELECT * FROM board";
    $board_result = mysql_query($board_select, $connect);
    $board_num_match = mysql_num_rows($board_result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8">
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
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <!-- form 추가 -->
                <div class="SearchBar_Area">
                    <i class="uil uil-search"></i>
                    <input type="text" class="SearchBar_Input" name="search"
                    placeholder="#Backend, #Frontend"/>
                    <input type="submit" value="검색" />
                </div>
                </form>
            </div>
        </div>
        <div class="Board_Content_Container">
            <div class="Board_Content_Area">
                <!-- <php

                    db 커넥트
                    검색어 입력된 직종 select

                    if( 검색된 거 없으면 )
                        alert (검색 결과가 없습니다)
                    else {
                        뽑아와 ~
                        <div>
                            djsalkdjlsakdjas
                            dkjasdhajshdkas
                            djsakljdklasjdlka
                        </div>
                    }
                    >
                     -->
                <?php
                    
                    while($board_row = mysql_fetch_row($board_result)) {
                        echo "
                            <div class='Board_Test'>
                                <h3>$board_row[1]</h3>
                                <h3>$board_row[2]</h3>
                                <h3>$board_row[3]</h3>
                            </div>
                        ";
                    }
                    echo $board_num_match;
                    echo $search;
                ?>




                <div class="Board_Test">
                    <?php

                    ?>
                </div>
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