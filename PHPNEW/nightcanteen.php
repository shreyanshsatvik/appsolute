<?php
session_start();
$link=mysqli_connect("localhost","root","","sign-up");
echo mysqli_connect_error();
if (mysqli_connect_error())
{
 die("Failed to connect");
}
if(array_key_exists('name',$_POST) OR array_key_exists('username', $_POST) OR array_key_exists('canteen',$_POST) OR array_key_exists('dosa',$_POST) OR array_key_exists('idly', $_POST) OR array_key_exists('hotdog', $_POST) OR array_key_exists('rice', $_POST) OR array_key_exists('fries', $_POST) OR array_key_exists('burger', $_POST) ) 
{

/*INSERT INTO `canteen` (`ID`, `Name`, `Username`, `Canteen`, `Dosa`, `Idly`, `Burger`, `Hdog`, `Rice`, `Fries`) VALUES ('1', 'Shreyansh', 'shreyanshsatvik', 'A-Block', '1', '1', '1', '1', '1', '1');
*/

$query= "INSERT INTO `canteen` (`Name`, `Username`, `Canteen`, `Dosa`, `Idly`, `Burger`, `Hdog`, `Rice`, `Fries`) VALUES ('".$_POST['name']."','".$_POST['username']."','".$_POST['canteen']."','".$_POST['dosa']."','".$_POST['idly']."','".$_POST['burger']."','".$_POST['hotdog']."','".$_POST['rice']."','".$_POST['fries']."')";

if(mysqli_query($link,$query))
       {
        header("Location: paymentdone.php");
       }
      }
?>

<html>
  <head>
    <title>Night-Canteen</title>
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
      #heading
      {
        color:white;
        font-size:700%;
        position:absolute;
        right:390px;
        top:-20px;
        border-bottom: 9px solid white;
      }
      #box
      {
        
       position:absolute;
       top:270px;
       right:130px;
       height:850px;
       width:1200px;
       border: 5px rgb(201, 183, 183) ridge;
       border-radius: 50px;
       margin-bottom: 20px;
      }
    .loginbox input[type="text"]
    {
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
      width:200px;
      border:none;
      position:absolute;
      right:580px;

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
        background:#121212;
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
      margin-left:500px;
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
    .check
    {
      color:rgb(201, 183, 183);
      font-size:30px;
      margin-left: 70px;
    }

    .id
    {
      margin-left: 70px;
      margin-top:50px;
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
    <img id="sideimage" src="Capture.JPG">
    <a href="homepage.php"><img id="logo" src="logo.png"></a>
    <p id="heading">Night-Canteen</p>
    <div id="box">
      <form class="loginbox" method="POST">
        <p class="id"><input type="text" placeholder="Name" name="name" value=<?php echo $_SESSION['firstname']  ?>></p>
        <p class="id"><input type="text" placeholder="Username" name="username" value=<?php echo $_SESSION['username'] ?>></p>
        <p><select name="canteen">
          <option>Select Night Canteen</option>
          <option>A-Block</option>
          <option>B-Block</option>
          <option >B-Annex</option>
          <option>C-Block</option>
          <option>D-Block</option>
          <option>D-Annex</option>
          <option>E-Block</option>
          <option>F-Block Canteen 01</option>
          <option>F-Block Canteen 02</option>
          <option>G-Block Canteen 01</option>
          <option>G-Block Canteen 02</option>
          <option>H-Block</option>
          <option>J-Block</option>
          <option>K-Block</option>
          <option>L-Block</option>
          <option>M-Block</option>
          <option>N-Block</option>
          <option>P-Block Canteen 01</option>
          <option>P-Block Canteen 02</option>
          <option>Q-Block Canteen 01</option>
          <option>Q-Block Canteen 02</option>


        </select></p>
        
          
          <p class="check">Massala Dosa<input type="number" name="dosa"></p>
          <p class="check">Idly<input type="number" name="idly"></p>
          <p class="check">Veg Burger<input type="number" name="burger"></p>
          <p class="check">Hot Dog<input type="number" name="hotdog"></p>
          <p class="check">Veg Fried Rice<input type="number" name="rice"></p>
          <p class="check">French Fries<input type="number" name="fries"></p>
          
        <a href="paymentdone.php"><p><input type="submit" value="Proceed For Payment"><p></a>

      </form>


    </div>

  </body>

</html>