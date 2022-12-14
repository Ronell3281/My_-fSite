<?php

use Phppot\Member;

if (!empty($_POST["signup-btn"])) {
    require_once './Model/Member.php';
    $member = new Member();
    $registrationResponse = $member->registerMember();
}
?>
<HTML>

<HEAD>
    <TITLE>User Registration</TITLE>
    <link href="assets/css/phppot-style.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/user-registration.css" type="text/css" rel="stylesheet" />
    <script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>



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
</HEAD>

<BODY>
    <div class="phppot-container">
        <div class="sign-up-container">
            <div class="login-signup">
                <a href="index.php">Login</a>
            </div>
            <div class="">
                <form name="sign-up" action="" method="post" onsubmit="return signupValidation()">
                    <div class="signup-heading">Registration</div>
                    <?php
                    if (!empty($registrationResponse["status"])) {
                    ?>
                        <?php
                        if ($registrationResponse["status"] == "error") {
                        ?>
                            <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                        <?php
                        } else if ($registrationResponse["status"] == "success") {
                        ?>
                            <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                        <?php
                        }
                        ?>
                    <?php
                    }
                    ?>
                    <div class="error-msg" id="error-msg"></div>
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
                                Email<span class="required error" id="email-info"></span>
                            </div>
                            <input class="input-box-330" type="email" name="email" id="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                Password<span class="required error" id="signup-password-info"></span>
                            </div>
                            <input class="input-box-330" type="password" name="signup-password" id="signup-password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="inline-block">
                            <div class="form-label">
                                Confirm Password<span class="required error" id="confirm-password-info"></span>
                            </div>
                            <input class="input-box-330" type="password" name="confirm-password" id="confirm-password">
                        </div>
                    </div>
                    <div class="row">
                        <input class="btn" type="submit" name="signup-btn" id="signup-btn" value="Sign up">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function signupValidation() {
            var valid = true;

            $("#username").removeClass("error-field");
            $("#email").removeClass("error-field");
            $("#password").removeClass("error-field");
            $("#confirm-password").removeClass("error-field");

            var UserName = $("#username").val();
            var email = $("#email").val();
            var Password = $('#signup-password').val();
            var ConfirmPassword = $('#confirm-password').val();
            var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

            $("#username-info").html("").hide();
            $("#email-info").html("").hide();

            if (UserName.trim() == "") {
                $("#username-info").html("required.").css("color", "#ee0000").show();
                $("#username").addClass("error-field");
                valid = false;
            }
            if (email == "") {
                $("#email-info").html("required").css("color", "#ee0000").show();
                $("#email").addClass("error-field");
                valid = false;
            } else if (email.trim() == "") {
                $("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
                $("#email").addClass("error-field");
                valid = false;
            } else if (!emailRegex.test(email)) {
                $("#email-info").html("Invalid email address.").css("color", "#ee0000")
                    .show();
                $("#email").addClass("error-field");
                valid = false;
            }
            if (Password.trim() == "") {
                $("#signup-password-info").html("required.").css("color", "#ee0000").show();
                $("#signup-password").addClass("error-field");
                valid = false;
            }
            if (ConfirmPassword.trim() == "") {
                $("#confirm-password-info").html("required.").css("color", "#ee0000").show();
                $("#confirm-password").addClass("error-field");
                valid = false;
            }
            if (Password != ConfirmPassword) {
                $("#error-msg").html("Both passwords must be same.").show();
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