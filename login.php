<?php

use Phppot\Member;

if (!empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<HTML>

<HEAD>
    <TITLE>Login</TITLE>
    <link href="assets/css/phppot-style.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/user-registration.css" type="text/css" rel="stylesheet" />
    <script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>

<BODY>
    <nav>

        <div id="entry">

            <a href="index.php"><img id="logo" src="Images/logo1.png"></a>
            <div class="nav-links">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li><a href="about.php">About Us</a>
                    </li>
                    <li><a href="contact.php">Contact
                            Us</a></li>
                    <li><a href="product.php">Products</a>
                    </li>
                    <li><a href="login.php">login</a>
                    </li>
                </ul>
            </div>
        </div>



    </nav>
    <style>
        #entry {
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            padding: auto;

        }

        #entry img {
            height: 100px;
            width: 100px;
            object-fit: contain;
            border-radius: 65%;
        }

        .header,
        body {
            width: 100%;
            background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(Images/homebackground.jpg);
            background-position: center;
            position: relative;
        }

        .nav-links,
        ul,
        li {
            font-family: verdana;
            font-size: 20px;
            list-style: none;
            display: inline-block;
            padding: 8px 12px;
            position: static;


        }

        a {
            color: rgb(255, 0, 140);
            text-decoration: none;
        }
    </style>


    <div class="phppot-container">
        <div class="sign-up-container">
            <div class="login-signup">
                <a href="user-registration.php">Sign up</a>
            </div>
            <div class="signup-align">
                <form name="login" action="" method="post" onsubmit="return loginValidation()">
                    <div class="signup-heading">Login</div>
                    <?php if (!empty($loginResult)) { ?>
                        <div class="error-msg"><?php echo $loginResult; ?></div>
                    <?php } ?>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                Username<span class="required error" id="username-info"></span>
                            </div>
                            <input class="input-box-330" type="text" name="username" id="username">
                        </div>
                    </div>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                Password<span class="required error" id="login-password-info"></span>
                            </div>
                            <input class="input-box-330" type="password" name="login-password" id="login-password">
                        </div>
                    </div>
                    <div class="row">
                        <input class="btn" type="submit" name="login-btn" id="login-btn" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function loginValidation() {
            var valid = true;
            $("#username").removeClass("error-field");
            $("#password").removeClass("error-field");

            var UserName = $("#username").val();
            var Password = $('#login-password').val();

            $("#username-info").html("").hide();

            if (UserName.trim() == "") {
                $("#username-info").html("required.").css("color", "#ee0000").show();
                $("#username").addClass("error-field");
                valid = false;
            }
            if (Password.trim() == "") {
                $("#login-password-info").html("required.").css("color", "#ee0000").show();
                $("#login-password").addClass("error-field");
                valid = false;
            }
            if (valid == false) {
                $('.error-field').first().focus();
                valid = false;
            }
            return valid;
        }
    </script>
</BODY>

</HTML>