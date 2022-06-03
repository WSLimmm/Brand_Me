<?php
    session_start();
    include "dbconn.php";

    $home_select = "SELECT * FROM home WHERE user_id = '$user_id'";
    $home_result = mysql_query($home_select, $connect);
    $home = mysql_num_rows($home_result);

    if (!isset($_SESSION['user_id'])) {

        // 로그인이 되어있지 않을 시 로그인 페이지로 이동.
        echo "
            <script>
                window.alert('로그인 후 이용해 주세요.')
                location.replace('login.php');
            </script>
            ";
    } else {

        if (!$home) {

            // 로그인이 되어 있고 첫 방문이라면 user_setting 페이지로 이동.
            echo "
                <script>
                    window.alert('첫 방문을 환영합니다.')
                    location.replace('user_setting.php');
                </script>
            ";
        } else {

            // 로그인이 되어 있고 첫 방문이 아니면 main 페이지로 이동.
            echo "
                <script>
                    location.replace('main.php');
                </script>
            ";
        }

        
    }


?>