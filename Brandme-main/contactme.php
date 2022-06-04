<?php
    session_start();
    include "dbconn.php";   // db 연결

    $contactme_user_id = $_SESSION['user_id'];
    $contactme_name = $_POST['contactme_name'];
    $contactme_email = $_POST['contactme_email'];
    $contactme_title = $_POST['contactme_title'];
    $contactme_message = $_POST['contactme_message'];

    // $select = "SELECT * FROM ";

    echo "
        id: $contactme_user_id <br>
        name: $contactme_name <br>
        email: $contactme_email <br>
        title: $contactme_title <br>
        message: $contactme_message <br>
    ";

    mysql_close();
?>