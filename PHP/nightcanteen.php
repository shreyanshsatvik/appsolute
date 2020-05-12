<?php
session_start();



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
        font-size:750%;
        position:absolute;
        right:320px;
        top:-70px;
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
  </style>
  </head>
  <body>
    <img id="sideimage" src="Capture.JPG">
    <a href="homepage.php"><img id="logo" src="logo.png"></a>
    <p id="heading">Night-Canteen</p>
    <div id="box">
      <form class="loginbox" method="GET">
        <p class="id"><input type="text" placeholder="Name" name="name" value=<?php echo $_SESSION['firstname'] ?> </p>
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
        
          
          <p class="check">Massala Dosa<input type="number" name="massaladosa"></p>
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