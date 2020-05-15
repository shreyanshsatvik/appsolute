<html>
  <head>
    <title>signup</title>
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
      .fullbody  
      {
        max-width: 1050px;
        height:610px;
        border-radius: 20px;
        margin:auto;
        background:rgba(0,0,0,0.8);
        box-sizing:border-box;
        padding:40px;
        margin-top:100px;
        /*box-shadow: 10px 20px #000;
        */
      }
      h2
      {
        position:relative;
        top:-15px;
        color:white;
        left:150px;
        

      }
      input[type=text] , input[type="password"],input[type="number"] 
      {
        
        align:right;
        width:450px;
        background:transparent;
        outline:none;
        border:none;
        border-bottom:1px dotted #fff;
        color:white;
        border-radius:5px;
        margin:5px;
        font-weight:bold;
        font-size:100%;
      }
      select{
        
        width:450px;
        box-sizing: border-box;
        background:black;
        outline:none;
        border:none;
        border-bottom:1px dotted #fff;
        color:whitesmoke;
        border-radius:20px;
        margin:5px;

      }
      input[type="submit"]
      {
        
        margin-left:30px;
        width: 40%;
        align:left;
        box-sizing:border-box;
        padding:10px 0;
        margin-top:25px;
        outline:none;
        border:none;
        background:#2FB8D9;
        border-radius:20px;
        opacity:0.7;
        font-size:20px;
        color:#fff;
        
          
      }
      input[type="submit"]:hover{
        background: #2FB8D9;
        opacity:1.0;
        cursor:pointer;
        
      }
      #logo
      {
        position:relative;
        float:right;
        margin-right:50px;
        top:80px;
      }


      
    
    
    </style>
  </head>
  <body>
    <?php 
    $link=mysqli_connect("localhost","root","","sign-up");
     echo mysqli_connect_error();
     if (mysqli_connect_error())
     {
      die("Failed to connect");
     }
      if(array_key_exists('firstname',$_POST) OR array_key_exists('lastname', $_POST) OR array_key_exists('email',$_POST) OR array_key_exists('username',$_POST) OR array_key_exists('password',$_POST) OR array_key_exists('gender',$_POST) OR array_key_exists('block',$_POST) OR array_key_exists('room',$_POST))
     {
     $query= "INSERT INTO `signup` (`First Name`, `Last Name`, `Email-Id`, `Username`, `Password`, `Gender`, `Block`, `Room-No`) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['username']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['block']."','".$_POST['room']."')";
      if(mysqli_query($link,$query))
      {
        header("Location:login.php");
      }
      else
      {
        echo"<p>There was some error.</p>";
      }

    }
    ?>
   <div class ="fullbody">
   <div >
        <a href="webpageusingcss.html"> <img src="logo.png" id="logo"></a>

      </div>
      <h2>Sign-Up Here</h2>
      <form method="POST">
       <p> <input type="text" placeholder="First Name" required name="firstname"></p>
       <p> <input type="text" placeholder="Last Name" required name="lastname"></p>
       <p><input type="text" placeholder="Email Id" required name="email"></p>
       <p><input type="text" placeholder="Username" required name="username"></p>
       <p>  <input type="password" placeholder="Password" required name="password"> </p>
        <p><select name="gender">
          <option>Male</option>
          <option>Female</option>
          <option >Others</option>
          </select></p>
          <p>
            <select name="block" >
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
              </select>
          </p>
          <p><input type="number" placeholder="Room No"  name="room"></p>
       <p></p> <input type="submit" value="Submit">
       
           
          
      </form>
    </div>


  </body>
</html>