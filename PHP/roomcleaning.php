<?php
session_start();
$link=mysqli_connect("localhost","root","","sign-up");
     echo mysqli_connect_error();
     if (mysqli_connect_error())
     {
      die("Failed to connect");
     }
      if(array_key_exists('firstname',$_POST) OR array_key_exists('lastname', $_POST) OR array_key_exists('block',$_POST) OR array_key_exists('room',$_POST) OR array_key_exists('time', $_POST))
     {
     $query= "INSERT INTO `roomcleaning` (`First Name`, `Last Name`,`Block`,`Room No`,`Time`) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['block']."','".$_POST['room']."','".$_POST['time']."')";
      if(mysqli_query($link,$query))
      {
        header("Location: homepage.php");
        $query1 ="SELECT `Name` FROM `workers` WHERE  Block='".mysqli_real_escape_string($link, $_POST['block'])."'";
        $result1= mysqli_query($link,$query1);
          while($row = mysqli_fetch_array($result1,MYSQLI_NUM))
          {
            $_SESSION['workername']= "{$row[0]}";
            
            
          } 
        $query2 ="SELECT `Mobile No` FROM `workers` WHERE  Block='".mysqli_real_escape_string($link, $_POST['block'])."'";
        $result2= mysqli_query($link,$query2);
          while($row1 = mysqli_fetch_array($result2,MYSQLI_NUM))
          {
            $_SESSION['workermobile']= "{$row1[0]}";
          
            
          } 
           $query3 ="SELECT `Employee ID` FROM `workers` WHERE  Block='".mysqli_real_escape_string($link, $_POST['block'])."'";
        $result3= mysqli_query($link,$query3);
          while($row2 = mysqli_fetch_array($result3,MYSQLI_NUM))
          {
            $_SESSION['id']= "{$row2[0]}";
          
            
          } 
          $_SESSION['time']=$_POST['time'];
          header("Location:workers.php");
            
           

      }
    }
?>
<html>
  <head>
    <title>Room-Cleaning</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">

    <style>
      body
      {
        background-color:#121212;
        padding:0;
        margin:0;
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
      #main
      {
        font-size: 700%;
        color:white;
        position:absolute;
        top:-40px;
        right:400px;
        border-bottom: 7px solid white;

      }
      #box2
      {
        position:absolute;
       top:240px;
       right:130px;
       height:530px;
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
      #form
      {
        margin: 70px;
      }
      .left
      {
        margin-left: 250px;
      }
      select{
        width:400px;
        box-sizing: border-box;
        background:#121212;
        margin-top:30px;
        border:none;
        border-bottom:3px solid rgb(201, 183, 183);
        color: rgb(201, 183, 183);
        border-radius:20px;
        font-size:30px;
        box-shadow: 0 05px 25px #121212(0,0,0,0.5);

      }
      .ip
      {
        margin-top: 30px;
      }
      input[type="submit"]
      {
        width: 30%;
        
        box-sizing:border-box;
        padding:10px 0;
        margin-top:55px;
        margin-left: 380px;
        outline:none;
        border:none;
        background:#2CB0D6;
        border-radius:20px;
        
        font-size:20px;
        color:black;
        
          
      }
      .loginbox input[type="submit"]:hover
    {
      cursor:pointer;
      background:red;
      
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
    <div id="box" class="loginbox">
      <a href="homepage.php"><img src="logo.png" id="logo"></a>
      <img id="sideimage"  src="capture.jpg">
      <p id="main">Room Cleaning</p>
      <div id="box2">
        
        <form id="form" method="POST">
          
          <input type="text" name="firstname" placeholder="First Name" required value="<?php echo $_SESSION['firstname'] ?>">
          <input type="text" name="lastname" class="left" placeholder="Last Name" value="<?php echo $_SESSION['lastname'] ?>" required>
          <p><select name="block" selected="<?php echo $_SESSION['block'] ?>">
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
          <p><input type="text" name="room" placeholder="Room-No" class="ip" value="<?php echo $_SESSION['room']  ?>" required></p>
          <p><input type="text" name="time" placeholder="Preffered Time" class="ip" required></p>
          <p><input type="submit" value="Register for Room Cleaning" class=""></p>




        </form>
        




      </div>


    </div>
  </body>
</html>