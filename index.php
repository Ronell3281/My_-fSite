<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="Images/logo1.png" type="image/x-icon">
  <link rel="stylesheet" href="mystylesheet.css" type="text/css">
  <title>RonZack CSC</title>
</head>

<body>
  <section class="header">
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


    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li><a href="about.php">About Us</a>
      </li>
      <li><a href="contact.php">Contact
          Us</a></li>
      <li><a href="product.php">Products</a>
      </li>
    </div>

    <span style="font-size:30px;cursor:pointer; color: white;" onclick="openNav()">&#9776; </span>

    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }


      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
      }
    </script>


    <label for="sidebar">
      <a></a>
    </label>
    <h1 id="head"> RonZack Computer Systems Company</h1>
    <p id="company"><strong>RonZack Computer Systems</strong> is an
      online digital company that
      deals with selling
      custom build Gaming desktop
      computers and normal desktop. <br /> We also sell Gaming Laptops aswell as computer Components.</p>

    <h2 style="text-align:center">Slideshow Gallery</h2>

    <div class="container">
      <div class="mySlides">
        <div class="numbertext">1 / 4</div>
        <img src="Images/wallpaperflare.com_wallpaper.jpg" class="mgs" />
      </div>

      <div class="mySlides">w2
        <div class="numbertext">2 / 4</div>
        <img class="mgs" src="Images/slide2.jpg" />
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 4</div>
        <img class="mgs" src="Images/slide3.jpg" style="height:50%;" />
      </div>

      <div class="mySlides">
        <div class="numbertext">4 / 4</div>
        <img class="mgs" src="Images/slide4.jpg" />
      </div>


      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

      <div class="caption-container">
        <p id="caption"></p>
      </div>

      <div class="row">
        <div class="column">
          <img class="demo cursor" src="Images/wallpaperflare.com_wallpaper.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
        </div>
        <div class="column">
          <img class="demo cursor" src="Images/slide2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
        </div>
        <div class="column">
          <img class="demo cursor" src="Images/slide3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
        </div>
        <div class="column">
          <img class="demo cursor" src="Images/slide4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
        </div>

        <img src="Images/pop.PNG" style="height: 100%; width: 100%; object-fit: contain">

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

  </section>


</body>

</html>