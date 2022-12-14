<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images/logo1.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="mystylesheet.css">
    <link rel="stylesheet" type="text/css" href="product&about.css">
    <script src="p&a-Script.js"></script>
    <title>RonZack CSC</title>

</head>

<body>

    <section class="header">
        <nav>
            <div id="entry">
                <a id="logo" href="index.php"><img src="Images/logo1.png"></a>
                <div class="nav-links">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <div class="dropdown"><button class="dropbtn"><a class="active" href="product.php">Products</a></button>
                            <ul class="dropdown-content">
                                <a href="#">Laptop Deals</a>
                                <a href="#">Desktop Deals</a>
                                <a href="#">Computer Components</a>
                            </ul>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

    </section>

    <main>

        <header>
            <table style="width:100%">
                <tr>
                    <td>
                        <div id="mySidenav" class="sidenav">
                            <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a class="dropbtn" href="product.php">Products</a></li>
                        </div>
                        <span style="font-size:30px;cursor:pointer; color: white;" onclick="openNav()">&#9776; </span>
                    </td>
                    <td>&nbsp;&nbsp;</td>
                    <td>
                        <h1 id="head"> RonZack Computer Systems Company</h1>
                    </td>
                    <td>
                        <div id="mySidenav2" class="sidenav2">
                            <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a></li>
                            <li><a href="#">Laptop Deals</a></li>
                            <li><a href="#">Desktop Deals</a></li>
                            <li><a href="#" onclick="ComputerComponents()" id="myBtn">Computer Components</a></li>
                            <li><a href="#" onclick="WindowNav()">Window Navigator Properties</a></li>
                        </div>
                        <span style="font-size:30px;cursor:pointer; color: #b16666;" onclick="openNav2()">&#9783; </span>
                    </td>
                </tr>
            </table>
        </header>

        <Section id="posts">

            <br>
            <article id="searchBar">
                <form action="" name="searchform" onsubmit="return validSearch()">
                    <input type="text" placeholder="Search for product.." name="search">
                    <button type="submit">Search</button>
                </form>
            </article><br>

            <article>
                <p id="winNav" name="winNav"></p>
            </article>

            <article id="laptopDeals">
                <h2>Laptop Deals</h2>

                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="Images/lenovo-legion-5-15ach6-ryzen-5-rtx-3050-gaming-laptop-1000px-v1-001.jpg" alt="laptopDeals img">
                        <br>
                        <div class="text"> Lenovo Deals</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="Images/acer-predator-gaming-laptop-500x500.jpg" alt="gamingLaptop">
                        <br>
                        <div class="text">Predator Laptop Deals</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="Images/gamingLaptop.jpg" alt="gamingLaptop">
                        <br>
                        <div class="text">Gaming Laptop Deals</div>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>

                </div>

                <br>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
                <br>
                <figcaption>
                    <a class="link" href="http://" target="_blank">Get the best deals on the latest laptops gaming
                        machines!</a>
                </figcaption>

            </article>
            <br><br>



            <article id="DesktopDeals">
                <h2>Desktop Deals</h2>
                <figure>
                    <img src="Images/desktop deal.webp" alt="DesktopDeals img">
                    &nbsp;&nbsp;<img src="Images/Desktop-Featured-image-e1510595773514.jpg" alt="DesktopDeals img">
                    &nbsp;&nbsp;<img src="Images\gamingDesktop.webp" alt="DesktopDeals img">
                    <figcaption>
                        <a class="link" href="http://" target="_blank">Get the best deals on the Desktop gaming
                            machines!</a>
                    </figcaption>
                </figure>
            </article><br><br>

            <article id="ComputerComponents" class="ComputerComponents">
                <h2>Computer Components </h2>
                <figure>
                    <img src="Images/computer components.jpg" alt="computer components img">&nbsp;&nbsp;
                    <img src="Images/Computer-motherboard.jpg" alt="motherboard img">
                    <img src="Images/UPgrade-Kits-banner-v1.webp" alt="gaming kit img">
                    <figcaption>
                        <a class="link" href="http://" target="_blank">Get related computer components.</a>
                    </figcaption>
                </figure>
            </article><br><br>




        </Section>

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

    </main>


</body>

</html>