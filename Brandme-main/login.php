<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <link rel="stylesheet" href="./css/loginstyle.css">
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>

        <!-- UNICONS -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    </head>

    <body>
        <div class="login-form">
            <div class="logo">
                <h1>Brand Me.</h1>
            </div>
            <form method="post" action="login_check.php">

                <div class="int-area">
                    <input type="text" name="id" id="id" autocomplete="off" required>
                    <label for="id"><i class="uil uil-user"></i> USER ID</label>
                </div>

                <div class="int-area">
                    <input type="password" name="pw" id="pw" autocomplete="off" required>
                    <label for="pw"><i class="uil uil-lock"></i> PASSWORD</label>
                </div>
                <div class="btn-area">
                    <button type="submit">SIGN IN</button>
                </div>

                <!-- <div class="btn-area">
                    <button type="button" onclick="location.href='main.html'">MAIN</button>
                </div> -->

            </form>
            <div class="caption">
                <div class="caption_items">
                    <a href="signup.php">Sign Up</a>
                </div>
                <div class="caption_items">
                    <a href="main_empty.html">Forgot Password?</a>
                </div>
            </div>
        </div>

        <script>
            let id = $('#id');
            let pw = $('#pw');
            let btn = $('#btn');

            $(btn).on('click', function() {
                if($(id).val() == "") {
                    $(id).next('label').addClass('warning');
                }
                else if($(pw).val() == "") {
                    $(pw).next('label').addClass('warning');
                }
            });
        </script>
    </body>
</html>