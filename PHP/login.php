<?php
     session_start();
     $link=mysqli_connect("localhost","root","","sign-up");
     echo mysqli_connect_error();
     if (mysqli_connect_error())
     {
      die("Failed to connect");
     }
     if(array_key_exists('username',$_POST) OR array_key_exists('password', $_POST))
     {
      if ($_POST['username']=='')
      {
        echo "<p>Email is required.</p>";

      }
      else if($_POST['password']=='')
      {

        echo "<p>Password is required.</p>";
      }
      else{
        $query= "SELECT * FROM `signup` WHERE  username='".mysqli_real_escape_string($link, $_POST['username'])."' AND password= '".$_POST['password']."' limit 1 "; 
        $result= mysqli_query($link,$query);
       $query1 ="SELECT `First Name` FROM `signup` WHERE  username='".mysqli_real_escape_string($link, $_POST['username'])."' AND password= '".$_POST['password']."' limit 1 "; 
       $query2 ="SELECT `Last Name` FROM `signup` WHERE  username='".mysqli_real_escape_string($link, $_POST['username'])."' AND password= '".$_POST['password']."' limit 1 "; 
       $query3 ="SELECT `Email-Id` FROM `signup` WHERE  username='".mysqli_real_escape_string($link, $_POST['username'])."' AND password= '".$_POST['password']."' limit 1 "; 
       $query4 ="SELECT `Gender` FROM `signup` WHERE  username='".mysqli_real_escape_string($link, $_POST['username'])."' AND password= '".$_POST['password']."' limit 1 "; 
       $query5 ="SELECT `Block` FROM `signup` WHERE  username='".mysqli_real_escape_string($link, $_POST['username'])."' AND password= '".$_POST['password']."' limit 1 "; 
       $query6 ="SELECT `Room-No` FROM `signup` WHERE  username='".mysqli_real_escape_string($link, $_POST['username'])."' AND password= '".$_POST['password']."' limit 1 "; 
       $result1= mysqli_query($link,$query1);
       $result2= mysqli_query($link,$query2);
       $result3= mysqli_query($link,$query3);
       $result4= mysqli_query($link,$query4);
       $result5= mysqli_query($link,$query5);
       $result6= mysqli_query($link,$query6);
       if( mysqli_num_rows($result)>0)
       {
         while($row = mysqli_fetch_array($result1,MYSQLI_NUM))
          {
            $_SESSION['firstname']= "{$row[0]}";
            
          }
          while($row1 = mysqli_fetch_array($result2,MYSQLI_NUM))
          {
            $_SESSION['lastname']= "{$row1[0]}";
            
          }
          while($row2 = mysqli_fetch_array($result3,MYSQLI_NUM))
          {
            $_SESSION['email']= "{$row2[0]}";
            
          }
          while($row3 = mysqli_fetch_array($result4,MYSQLI_NUM))
          {
            $_SESSION['gender']= "{$row3[0]}";
            
          }
          while($row4 = mysqli_fetch_array($result5,MYSQLI_NUM))
          {
            $_SESSION['block']= "{$row4[0]}";
            
          }
          while($row5 = mysqli_fetch_array($result6,MYSQLI_NUM))
          {
            $_SESSION['room']= "{$row5[0]}";
            
          }

        
      
        
        

        $_SESSION['username']=$_POST['username'];
        header("Location: homepage.php");

        
       
      }

      
      }
     }
   



    ?>
<html>
  <head>
    <title>Login_Page</title>
    
  <style>
    body
    {
      margin:0;
      padding:0;
      font-family: 'Rubik', sans-serif;
      background-color:#121212;
      color:white;
    }
    #box{
      position:absolute;
      
      top:100px;
      right:350px;
      height:500px;
      width:800px;
      border: 5px rgb(201, 183, 183) ridge;
      border-radius: 50px;
      box-sizing:border-box;
      margin:auto;

      
    }
    #logoimg{
      position:relative;
      top:75px;
      right:-40px;
      padding-right: 10px;;
      border-right: 2px orangered solid;


    }
    #login
    {
      position:relative;
      top:30px;
      right:-280px;
    }
    #logo2{
      position:relative;
      top:-310px;
      right:-250px;
      height:130px;
      width:130px;
    }
    #form
    {
      position:relative;
      right:-150px;
      margin:40px;
      margin-left:60px;
      top:-320px;
    }
    .loginbox input[type="text"] ,input[type="password"]
    {
      border:none;
      border-bottom:1px solid #fff;
      background:transparent;
      outline:none;
      height:40px;
      color:#fff;
      font-size:16px;
    }
    .loginbox input[type="submit"]
    {
      border:none;
      outline:none;
      height:30px;
      width:200px;
      background: #fb2525;
      color :#fff;
      font-size:18px;
      border-radius:20px;
    }
    .loginbox a:hover{
      color:lightseagreen;
    }
    .loginbox a{
      font: size 12px;
      line-height:10px;
      color:darkgrey;
    }
    .loginbox input[type="submit"]:hover
    {
      cursor:pointer;
      background:lightslategrey;
      
    }
    #signup
    {
      position:relative;
      top:10px;
    }


  </style>

  </head>
  <body>
    
    <div id="box" >
      <div id="logo" class="loginbox">
        <a href="webpageusingcss.html"><img id="logoimg" src="logo.png"></a>
    
         <div id="login" >
        <img id="logo2" src="logo2.png">
        <form id="form" method="POST" action="#">
          <p><input type="text" placeholder="username" name="username" required></input></p>
          <p><input type="password" placeholder="password" name="password" required></p>
          <p><input type="submit" value="Login"></p>
          
          <p id="signup"><a href="signup.php">Don't have an account?</a></p>
          

        </form>
      </div>
    </div>  
  </body>
  
</html>