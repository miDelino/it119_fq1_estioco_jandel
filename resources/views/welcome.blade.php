<!DOCTYPE html>
<html>
  <head>
    <title>Estioco Portfolio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
    .w3-row-padding img {margin-bottom: 12px}
    /* Set the width of the sidebar to 120px */
    .w3-sidebar {width: 120px;background: #222;
        background-color: darkslategray;
    }
    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {margin-left: 120px}
    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {#main {margin-left: 0}}
    body{
        background: linear-gradient(to bottom, black, grey);
    }
    body h2{
            color: black; /* Default text color */
            text-shadow: 
                -1px -1px 0 white,  
                 1px -1px 0 white,
                -1px  1px 0 white,
                 1px  1px 0 white;
            font-weight: bold; /* Optional, makes the text thicker */
        }

        /* Ensure all text elements inherit the text-shadow */
        body h2 {
            text-shadow: 
                -1px -1px 0 white,  
                 1px -1px 0 white,
                -1px  1px 0 white,
                 1px  1px 0 white;
        }
    </style>
  </head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="{{ asset ('images/es2.png')}}" style="width:90%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PHOTOS</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo" style="font-weight: bold; font-family:Verdana; color:slategrey;"><span class="w3-hide-small">I'm</span> Jandel B. Estioco</h1>
    <h3 style="font-weight: bold; font-family:Verdana; color:slategrey;">BSIT 3A | Certified Noob Programmer | Lazy at Best.</h3>
    <img src="{{ asset ('images/estioco.png')}}" alt="boy" class="w3-image" width="592" height="800">
    <img src="{{ asset ('images/es2.png')}}" alt="boy" class="w3-image" width="592" height="800">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="" style="font-weight: bold; font-family:Verdana; color: darkslategray;">About Jandel:</h2>
    <hr style="width:200px" class="w3-opacity">
    <h3 style="font-weight: bold; color:white;">
        Hello My Name is Jandel B. Estioco, A BSIT 3A Student From Saint Louis College. I am 21 years old living in Barangay Tanqui
        City of San Fernando, La Union. To be honest, I am not an eccentric, I go with the flow with whatever circumstances or scenarios
        that are thrown at me.
    </h3>
    <h2 class="" style="font-weight: bold; font-family:Verdana; color: darkslategray;">Hobbies:</h2>
    <hr style="width:200px" class="w3-opacity">
    <h3 style="font-weight: bold; color:white;">
    <ul>
        <li>Sleeping</li>
        <li>Eating</li>
        <li>Playing Video Games</li>
        <li>Studying</li>
    </ul>
    </h3>
    <h2 class="" style="font-weight: bold; font-family:Verdana; color: darkslategray;">Skills:</h2>
    <h2 class="" style="font-family:Verdana; color:  black;">Javascript</h2>
    <div class="w3-white">
      <div class="" style="background-color:slategray; height:28px;width:45%" ></div>
    </div>
    <h2 class="" style="font-family:Verdana; color: black;">Web Design</h2>
    <div class="w3-white">
      <div class="" style="background-color:slategray; height:28px;width:55%"></div>
    </div>
    <h2 class="" style="font-family:Verdana; color: black;">Communication</h2>
    <div class="w3-white">
      <div class="" style="background-color: slategray; height:28px;width:30%"></div>
    </div><br>
    
    <div class="w3-row w3-center w3-padding-16 w3-section" style="background-color:slategray; color:white;">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">8</span><br>
        Partnerships
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">911</span><br>
        Projects Done
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">420+</span><br>
        Happy Clients
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">69</span><br>
        Meetings
      </div>
    </div>

    <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i> Download Resume
    </button>
    
    <!-- Grid for pricing tables -->
    <h2 class="" style="font-weight: bold; font-family:Verdana; color: darkslategray;">Jandel's Price Rate:</h2>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16">Web Design</li>
          <li class="w3-padding-16">Simple Code</li>
          <li class="w3-padding-16">5 GB Storage</li>
          <li class="w3-padding-16">Temporary Support</li>
          <li class="w3-padding-16">
            <h2>₱ 5,000</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Subscribe</button>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro Plus Max</li>
          <li class="w3-padding-16"> Advanced Web Design</li>
          <li class="w3-padding-16"> Compact Code</li>
          <li class="w3-padding-16">512 GB Storage</li>
          <li class="w3-padding-16">Endless Support</li>
          <li class="w3-padding-16">
            <h2>₱ 15,000</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Subscribe</button>
          </li>
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
    </div>
    
    <!-- Testimonials -->
    <h2 class="" style="font-weight: bold; font-family:Verdana; color: darkslategray;">Reviews from Happy Clients:</h2>  
    <img src="{{ asset ('images/pic3.jpg')}}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <h3 style="color:white; font-weight: bold;"><span class="w3-large w3-margin-right">Jus Ting Ducusin.</span> CEO at Delulu.</h3>
    <p style="color:white; font-weight: bold;">"I like his way of coding, very compact and neat. Approachable and Kind too."</p><br>
 
    <img src="{{ asset ('images/pic2.jpg')}}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <h3 style="color:white; font-weight: bold;"><span class="">Daversion Playz.</span> Youtube Content Creator.</h3>
    <p style="color:white; font-weight: bold;">"Homie helped me fix my website. Recommend 10/10." </p><br>

    <img src="{{ asset ('images/pic4.jpg')}}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <h3 style="color:white; font-weight: bold;"><span class="w3-large w3-margin-right">Ramdiscammer Ori. Hinal.</span> Manager of MEMES.</h3>
    <p style="color:white; font-weight: bold;">"Professional with his work, had a partnership with him before."</p><br>
    

  <!-- End About Section -->
  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">My Photos</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="{{ asset ('images/trip4.jpg')}}" style="width:100%">
        <img src="{{ asset ('images/trip2.jpg')}}" style="width:100%">
        <img src="{{ asset ('images/trip1.jpg')}}" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="{{ asset ('images/trip3.jpg')}}" style="width:100%">
        <img src="{{ asset ('images/pic1.jpg')}}" style="width:100%">
        <img src="{{ asset ('images/trip5.jpg')}}" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">


    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
<!-- Footer. This section contains an ad for W3Schools Spaces. You can leave it to support us. -->
<footer class="w3-content w3-padding-64  w3-xlarge">

 <p class="w3-small">Womp Womp, Aung Aung, Unga Bunga!</p>
 <!-- End footer -->
</footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
