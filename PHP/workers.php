<?php
session_start();
echo $_SESSION['workername'];
echo $_SESSION['workermobile'];
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



  </style>
  </head>
  <body>
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