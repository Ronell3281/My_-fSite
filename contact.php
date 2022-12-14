
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images/logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="mystylesheet.css" type="text/css">
    <script src="p&a-Script.js"></script>
    <title>RonZack CSC</title>
    <nav class="con">
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
                </ul>
            </div>
        </div>
    </nav>

</head>

<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $lastnameErr = "";
$name = $email = $gender = $lname = $subject = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["lname"])) {
    $lastnameErr = "last Name is required";
  } else {
    $name = test_input($_POST["lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $lastnameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["useremail"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["useremail"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    

  if (empty($_POST["subject"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["subject"]);
  }

  if (empty($_POST["usergender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["usergender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

    <div class="container">
        <img class="float" src="Images/use.jpg" style="object-fit: contain">
        <form action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="contactForm" method = post>
            <p><span class="error">* required field</span></p>

            <label for="fname" required autofocus>First Name</label><span class="error">* <?php  echo $nameErr; ?></span>
            <input class="text" type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label><span class="error">* <?php  echo $lastnameErr;?></span>
            <input class="text" type="text" id="lname" name="lastname" placeholder="Your last name..">

            <br>
            <label for="usergender">Gender: </label>
            <input type="radio" name="gender" value="female"><label for="usergender">Female</label>
            <input type="radio" name="gender" value="male"><label for="usergender">Male</label>
            <input type="radio" name="gender" value="other"><label for="usergender">Other</label>
            <span class="error">* <?php echo $genderErr; ?></span>
            <br><br> 

            <label for="useremail">Email: <input type="email" name="useremail" id="useremail" required></label>
                            <span class="error"> * <?php echo  $emailErr; ?></span><br>
            <label for="country">Country</label><span class="error">*</span>

            <select id="country" name="country">
                <option value="australia">South Africa</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                <option value="Kenya">Kenya</option>
                <option value="Nigeria">Nigeria</option>
            </select>
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.."></textarea>

            <input id="submit" type="submit" value="Submit">
            


        </form>
        <footer>
            <p class="right">
                <i>&copy; 2022 </i>&nbsp;&nbsp;
                All Rights Reserved by RonZack&nbsp;&nbsp;
            </p>
            <p class="right">Proudly created by Muhluri and Ronell</p>
            <p class=" right">
                <small>Last modified:
                    <time>4 May 2022</time>
                </small>
            </p>
        </footer>

    </div>



</body>

</html>