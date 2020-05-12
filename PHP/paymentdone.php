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



    </style>
    <body>
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
