<?php
session_start();



?>
<html>
  <head>
    <title>Payment Page</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">

    <style>
      body
      {
        background-color:#121212;
        padding:0;
        margin:0;
        zoom:90%;
        font-family: 'Rubik', sans-serif;

      }
      #logo
      {
        position:fixed;
        top:20px;
        right:1500px;
        height:180px;
      }
      #sideimage
      {
        position:fixed;
        top:0px;
        right:1450px;
        height:1500px;  
        width:50px;
      }
      #box
      {
        position:absolute;
        height:500px;
        width:400px;
        right:600px;
        top:180px;
        border: 5px rgb(201, 183, 183)ridge;
        border-radius: 50px;

      }
      #tick
      {
        position:relative;
        height:200px;
        width:200px;
        top:10px;
        right:-100px;

      
      }
      .font
      {
        font-size: 200%;
        color: white;
        position: relative;
        right:-45px;
      }
      .random
      {
        position: relative;;
        color:white;
        right:-60px;
        font-size: 150%;


      }
      #thank
      {
        position: relative;;
        color:white;
        right:-35px;
        font-size: 120%;

      }
      input[type="submit"]
      {
        width: 50%;
        
        box-sizing:border-box;
        padding:10px 0;
        margin-top:25px;
        margin-left: 95px;
        outline:none;
        border:none;
        background:#2CB0D6;
        border-radius:20px;
        
        font-size:20px;
        color:black;
        
          
      }
      input[type="submit"]:hover
      {
      cursor:pointer;
      background:lightslategrey;
      
      }
      header {
  display: flex;
  justify-content: flex-end ;
  align-items: center;
  padding: 30px 10%;
  background-color: #121212;
}



.nav__links {
  list-style: none;
  display: flex;
}

.nav__links a,
.cta,
.overlay__content a {
  font-family: "Montserrat", sans-serif;
  font-weight: 500;
  color: #edf0f1;
  text-decoration: none;
}

.nav__links li {
  padding: 0px 20px;
}

.nav__links li a {
  transition: all 0.3s ease 0s;
}

.nav__links li a:hover {
  color: #0088a9;
}

.cta {
  margin-right:-70px;
  margin-left: 20px;
  padding: 9px 25px;
  background-color: rgba(0, 136, 169, 1);
  border: none;
  border-radius: 50px;
  cursor: pointer;
  transition: all 0.3s ease 0s;
}

.cta:hover {
  background-color: rgba(0, 136, 169, 0.8);
}

/* Mobile Nav */

.menu {
  display: none;
}

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  background-color: #24252a;
  overflow-x: hidden;
  transition: all 0.5s ease 0s;
}

.overlay--active {
  width: 100%;
}

.overlay__content {
  display: flex;
  height: 100%;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.overlay a {
  padding: 15px;
  font-size: 36px;
  display: block;
  transition: all 0.3s ease 0s;
}

.overlay a:hover,
.overlay a:focus {
  color: #0088a9;
}
.overlay .close {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  color: #edf0f1;
  cursor: pointer;
}

@media screen and (max-height: 450px) {
  .overlay a {
    font-size: 20px;
  }
  .overlay .close {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}

@media only screen and (max-width: 800px) {
  .nav__links,
  .cta {
    display: none;
  }
  .menu {
    display: initial;
  }
}




    </style>
    <body>
    <header>
          
          <nav>
              <ul class="nav__links">
                  <li><a href="roomcleaning.php">Room Cleaning</a></li>
                  <li><a href="nightcanteen.php">Night Canteen</a></li>
                  <li><a href="maintenance.php">Maintenance</a></li>
                  <li><a href="map.php">Cab Tracking</a></li>
                  <li><a href="ambulance.php">Emergency Service</a></li>
              </ul>
          </nav>
          <a class="cta" href="webpageusingcss.php">Log-Out</a>
          <p class="menu cta">Menu</p>
      </header>
      <div id="mobile__menu" class="overlay">
          <a class="close">&times;</a>
          <div class="overlay__content">
              <a href="#">Services</a>
              <a href="#">Projects</a>
              <a href="#">About</a>
          </div>
      </div>
        <a href="homepage.php"><img src="logo.png" id="logo"></a>
        <img id="sideimage"  src="capture.jpg">
        <div id ="box">
          <img src="tick.png" id="tick">
          <p class ="font"><u>Payment Successful</u></p>
        
          <p id="random" class="random"></p>
          <p id="thank"></p>
          <a href="payementdone.html" download="receipt.html"><p><input type="submit" value="Download Receipt" class=""></p></a>
  
          

        </div>
        <script type= "text/javascript">
  
            var x = Math.floor((Math.random() * 100) + 1);
            document.getElementById("random").innerHTML = "Your Token No is ---" +" "+ x;
            var y = Math.floor((Math.random() * 20) + 1);
            document.getElementById("thank").innerHTML = "Your food will be ready in :" +" "+ y+"minutes.";

          
          
          </script>
          
    </body>
  </head>
</html>
