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
        font-size: 800%;
        color:white;
        position:absolute;
        top:-120px;
        right:340px;
        border-bottom: 7px solid white;

      }
      #box2
      {
        position:absolute;
       top:200px;
       right:130px;
       height:550px;
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
        background:transparent;
        margin-top:30px;
        border:none;
        border-bottom:3px solid rgb(201, 183, 183);
        color: rgb(201, 183, 183);
        border-radius:20px;
        font-size:30px;

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
        



    </style>
  </head>
  <body>
    <div id="box" class="loginbox">
      <a href="webpageusingcss.html"><img src="logo.png" id="logo"></a>
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