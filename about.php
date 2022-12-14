<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images/logo1.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="mystylesheet.css">
    <link rel="stylesheet" type="text/css" href="product&about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="p&a-Script.js"></script>
    <title>RonZack CSC</title>
    
</head>

<body id="aboutBody">

    <section class="header">
        <nav>
            <div id="entry">
                <a id="logo" href="index.php"><img src="Images/logo1.png" ></a>
                <div class="nav-links">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a class="active" href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="product.php">Products</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </section>

    <div id="mySidenav" class="sidenav">
        <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="product.php">Products</a></li>
    </div>
  
    <span style="font-size:30px;cursor:pointer; color: white;" onclick="openNav()">&#9776; </span>
  
    <h1 id="aboutUs" >About Us Page</h1>
    <p id="aboutUs" onmouseover="mOver(this)" onmouseout="mOut(this)">Who we are and what we do.</p>
    
   

    <div class="row">

        <div class="about-section-column">

            <div class="card">
                <img src="Images/zico.PNG" alt="Image of Muhluri" >
                <div class="container">
                    <h2>Muhluri Mhlongo</h2>
                    <p class="title">Web Developer and Designer</p>
                    <p >Born and raised in Limpopo, Muhluri Mhlongo is an undergrad student
                        at Rhodes university. He is on the verge of completing his BSc degree in Computer Science and
                        Information Systems. 
                        He has gained a great deal of knowledge on the aesthetics required when designing webstites from the
                        Information Systems course. These skill set will be heavily applied in the journey of
                        developing a fully functional RonZack webstite.
                        His passion for web development is one of the driving forces behind the creation and success of this
                        online digital company. The intuitive approach to develop this site will give the shoppers an
                        amazing user experience. To get in touch with Mr Mhlongo, you can email him at: <br> <a
                            href="mailto:hege@example.com">Muhluri10@gmail.com</a>
                    </p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="about-section-column">

            <div class="card">
                <img src="Images/Ronell.jpeg" alt="Image of Ronell">
                <div class="container">
                    <h2>Ronell Shivuri</h2>
                    <p class="title">Web Developer and Designer</p>
                    <p >Mr Ronell Shivuri is an undergrad student at Rhodes university. He is
                        also on the verge of completing his BSc degree in Computer Science and Statistics. 
                        He has gained a great deal of knowledge on gaming computers and back end programming. These
                        skill set will be heavily applied in the journey of developing a fully functional RonZack webstite.
                        His passion for programming is one of the driving forces behind the creation and success of this
                        online digital company. <br> To get in touch with Ronell, you can email him at: <br> <a
                            href="mailto:hege@example.com">Ronell1210@gmail.com</a>
                    </p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    
        <div class="about-section-column">

            <div class="card">
                <img src="Images/logo1.png" alt="RonZack Logo">
                <div class="container">
                    <h2>RonZack</h2>
                    <p class="title">Computer Systems Company</p>
                    <p>RonZack was created to provide an online digital store where
                        customers may shop for <br>
                        Laptops (gaming laptops included),
                        Desktops (gaming desktops included),
                        and all related Computer Components such as monitors. <br> The name came through by combinig two
                        names of the developers, Ron from Ronell and Zack from Zicko (Muhluri's popular name). <br> To get
                        in touch with RonZack CSC, you can email us: <br> <a
                            href="mailto:hege@example.com">RonZack23@gmail.com</a>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="about-section-column">

            <div class="card">
                <img src="Images\socmedicons.png" alt="socmedicons">
                <div class="container">
                    <h2>RonZack Social Media Accounts</h2>
                    <p ><a href="#" class="fa fa-facebook"></a> @RonZack_CSC</p><br>
                    <p><a href="#" class="fa fa-twitter"></a> @RonZack_CSC </p><br>
                    <p><a href="#" class="fa fa-youtube"></a> @RonZack_CSC</p><br>
                    <p><a href="#" class="fa fa-instagram"></a>@RonZack_CSC</p><br>
                     To get in touch with RonZack CSC, you can email us: <br> <a
                            href="mailto:hege@example.com">RonZack23@gmail.com</a>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card">
            <div class="container">
            <p>
            <h2>Not sure what to get?</h2>
            If you are new to the pc world of gaming, watch this video below to give you a basic insight on what you need to
            know before your first purchase with RonZack. <br><br>
            <iframe width="800" height="400" src="https://www.youtube.com/embed/oHJrfeBVA8M">
            </iframe>
            </p>
            </div>
        </div>
    </div>

    <footer>
        <p>
            <i>&copy; 2022 </i>&nbsp;&nbsp;
            All Rights Reserved by RonZack&nbsp;&nbsp;
        </p>
        <p>Proudly created by Muhluri and Ronell</p>
        <p>
            <small>Last modified:
                <time>4 May 2022</time>
            </small>
        </p>
    </footer>

</body>

</html>