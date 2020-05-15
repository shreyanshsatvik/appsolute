<?php
session_start();

?>

<html>
  <head>
    <title>Workers</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">

  <style>
    body
    {
      background-color:#121212;
      padding:0;
      margin:0;
      font-family: 'Rubik', sans-serif;
      zoom:90%;
      
    }
    #sideimage
      {
        position:fixed;
        top:0px;
        right:1450px;
        height:1500px;  
        width:50px;
      }
      #logo
      {
        position:fixed;
        top:20px;
        right:1500px;
        height:180px;
      }
      #box
      {
        height:500px;
        width:350px;
        position:absolute;
        right:600px;
        top:150px;
        border: 5px rgb(201, 183, 183) ridge;
        border-radius: 50px;
        }
        #worker
        {
          height:180px;
          width:180px;
          position: absolute;
          top:30px;
          right:90px;
          margin-bottom: 50px;
        }
        #first
        {
          position:absolute;
        
          top:250px;
        
        }
        .text
        {
          margin-bottom: 40px;
          margin-left: 40px;
          font-size: 150%;
          color:white;
        }
        #second
        {
          position:absolute;
          top:300px;
        }
        #third
        {
          position:absolute;
          top:350px;
        }
        #fourth
        {
          position:absolute;
          top:400px;

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
  </head>
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
    <img src="Capture.JPG" id="sideimage">
    <a href="homepage.php"><img src="logo.png" id="logo">
    <div id="box"></a>
      <img src="worker.png" id="worker">
      <p id="first" class="text">Name:- <?php echo $_SESSION['workername'] ?></p>
      <p id="Second" class="text">Id:-<?php echo $_SESSION['id'] ?></p>
      <p id="third" class="text">Time:-<?php echo $_SESSION['time'] ?></p>
      <p id="fourth" class="text">Mobile:- <?php echo $_SESSION['workermobile'] ?></p>
      
    </div>
  </body>

</html>