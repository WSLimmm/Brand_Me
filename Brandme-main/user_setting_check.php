<?php
            session_start();
            include "dbconn.php";   // db 연결

            $user_id = $_SESSION['user_id'];
        
            // home
            $home_name = $_POST['user_name'];
            $home_occupation = $_POST['occupation'];
            $home_information = $_POST['home_information'];
            $git = $_POST['git'];
            $notion = $_POST['notion'];
            $instagram = $_POST['instagram'];

            $check = "SELECT * FROM home WHERE user_id = '$user_id'";
            $check_result = mysql_query($check, $connect);
            $check_num = mysql_num_rows($check_result);

            if (!$check_num) {

                $insert_home = "INSERT INTO home (user_id, user_name, occupation, home_information, git, notion, instagram)
                                    VALUES ('$user_id', '$home_name', '$home_occupation', '$home_information', '$git', '$notion', '$instagram')";
                $insert_result = mysql_query($insert_home, $connect);
                echo ("
                    <script>                            
                        window.alert('정보를 입력하였습니다.')
                        location.replace('main.php')
                    </script>
                    ");
        
            } else {
                
                $update_home = "UPDATE home SET user_id = '$user_id', user_name = '$home_name', occupation = '$home_occupation',
                                    home_information = '$home_information', git = '$git', notion = '$notion', instagram = '$instagram' WHERE user_id = '$user_id'";
                $update_result = mysql_query($update_home, $connect);
                echo ("
                    <script>                            
                        window.alert('정보를 수정하였습니다.')
                        location.replace('main.php')
                    </script>
                    ");
            }


            //about 부분 추가해야함.
            $about_information = $_POST['about_information'];

            

            //skills frontend
            $skills_front_1 = $_POST['skills_front_1'];
            $skills_front_2 = $_POST['skills_front_2'];
            $skills_front_3 = $_POST['skills_front_3'];
            $skills_front_4 = $_POST['skills_front_4'];
            $skills_front_per_1 = $_POST['skills_front_per_1'];
            $skills_front_per_2 = $_POST['skills_front_per_2'];
            $skills_front_per_3 = $_POST['skills_front_per_3'];
            $skills_front_per_4 = $_POST['skills_front_per_4'];

            

            //skills backend
            $skills_back_1 = $_POST['skills_back_1'];
            $skills_back_2 = $_POST['skills_back_2'];
            $skills_back_3 = $_POST['skills_back_3'];
            $skills_back_4 = $_POST['skills_back_4'];
            $skills_back_per_1 = $_POST['skills_back_per_1'];
            $skills_back_per_2 = $_POST['skills_back_per_2'];
            $skills_back_per_3 = $_POST['skills_back_per_3'];
            $skills_back_per_4 = $_POST['skills_back_per_4'];

            

            //contact
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $location = $_POST['location'];

            


        
            
   
            mysql_close();
        ?>