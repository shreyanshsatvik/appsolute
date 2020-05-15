<?php
session_start();
$link=mysqli_connect("localhost","root","","sign-up");
echo mysqli_connect_error();
if (mysqli_connect_error())
{
 die("Failed to connect");
}
if(array_key_exists('name',$_POST) OR array_key_exists('username', $_POST) OR array_key_exists('block',$_POST) OR array_key_exists('room',$_POST)) 
{
$query="INSERT INTO `emergencyservice` (`Name`, `Username`, `Block`, `Room`) VALUES ('".$_POST['name']."','".$_POST['username']."','".$_POST['block']."','".$_POST['room']."')";
if(mysqli_query($link,$query))
       {
        header("Location: confirm.php");
       }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emergency-Service</title>
  <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
</head>
<style>

body
      {
        background-color:#121212;
        padding:0;
        margin:0;
        font-family: 'Rubik', sans-serif;
        zoom:90%;

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
        height:540px;
        width:800px;
        top:230px;
        right:330px;
        border: 5px rgb(201, 183, 183) ridge;
       border-radius: 50px;
       margin-bottom: 20px;
      }
      #heading
      {
        color:white;
        font-size:550%;
        position:absolute;
        right:360px;
        top:-05px;
        border-bottom: 9px solid white;
      }
      .loginbox input[type="text"]
    {
      margin-top: 40px;
      margin-left: 60px;
      width:400px;
      border:none;
      border-bottom:3px solid rgb(201, 183, 183);
      background:transparent;
      outline:none;
      height:40px;
      color:rgb(201, 183, 183);
      font-size:30px;
      border-radius:20px;
    }
    .loginbox input[type="number"]
    {   
      margin-top: 8px;
      margin-left: 60px;
      width:400px;
      border:none;
      border-bottom:3px solid rgb(201, 183, 183);
      background:transparent;
      outline:none;
      height:40px;
      color:rgb(201, 183, 183);
      font-size:30px;
      border-radius:20px;
      
    }
    select{
        width:400px;
        box-sizing: border-box;
        background:transparent;
        margin-top:40px;
        margin-bottom:30px;
        margin-left:70px;
        border:none;
        border-bottom:3px solid rgb(201, 183, 183);
        color: rgb(201, 183, 183);
        border-radius:20px;
        font-size:30px;
    }
    .loginbox input[type="submit"]
    {
      border:none;
      outline:none;
      height:45px;
      margin-top: 40px;
      margin-left:300px;
      width:200px;
      background: #fb2525;
      color :#fff;
      font-size:18px;
      border-radius:20px;
    }
    .loginbox input[type="checkbox"]
    {
      margin-left:70px;
      
    }
    .loginbox input[type="submit"]:hover
    {
      cursor:pointer;
      background:grey;
      
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
      <p id="heading">Emergency Service</p>
  <div id="box">
    <form class="loginbox" method="POST">
      <p><input type="text" placeholder="Name" name="name" value=<?php echo $_SESSION['firstname']  ?>></p>
      <p><input type="text" placeholder="Username" name="username" value=<?php echo $_SESSION['username']  ?>></p>
      <p><select name="block">
      <option selected="selected" ><?php echo $_SESSION['block'] ?></option>
          <option>A-Block</option>
            <option>B-Block</option>
            <option >B-Annex</option>
            <option>C-Block</option>
            <option>D-Block</option>
            <option>D-Annex</option>
            <option>E-Block</option>
            <option>F-Block</option>
            <option>G-Block</option>
            <option>H-Block</option>
            <option>J-Block</option>
            <option>K-Block</option>
            <option>L-Block</option>
            <option>M-Block</option>
            <option>N-Block</option>
            <option>P-Block</option>
            <option>Q-Block</option>
        </select></p>
      <p><input type="number" placeholder="Room Number" name="room" value=<?php echo $_SESSION['room']?>></p>
      <p><input type="submit" value="Call Ambulance"><p></a>


      
    
    </form>

  </div>
</body>
</html>