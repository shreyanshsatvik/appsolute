<?php
session_start();







?>





<html>
<head>
<title>AppSolute</title>

<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">


<style>
#topbar{

width:1500px;
background-color:#121212;
height:80px;
}
body
{
margin:0;
padding:0;
font-family: 'Rubik', sans-serif;
background-color:#121212;
zoom:100%;


}
#logo{
width:77px;
height:77px;
float:left;
margin-top:3px;
margin-right:6px;
margin-left:4px;
}
.top-barsection
{
float:left;
border-left: 10px #FCB040 double;
height:100%;
}
#sign-inimage
{
width:72px;
height:72px;
margin:4px;
margin-right:3px;
margin-left:2px;
}
#login
{
color:white;
font-size:125%;
position:relative;
top:-35px;
margin-right:10px;
}
#garbageimage
{
width:77px;
height:77px;
margin:2px;
margin-right:2px;
margin-left:2px;
}
#foodimage
{
width:71px;
height:71px;
margin:5px;
margin-right:2px;
margin-left:2px;
}
#repairimage
{

width:75px;
height:75px;
margin:3px;
margin-top:4px;
margin-right:3px;
margin-left:4px;
}
#gpsimage
{
width:79px;
height:79px;
margin:3px;
margin-right:2px;
margin-left:2px;
}
#hospitalimage
{
height:74px;
width:72px;
margin:3px;
margin-right:4px;
}

#helplineimage
{
height:74px;
width:75px;
margin:3px;
margin-right:6px;
margin-left:4px;
}
#appsolutelogo
{
position:relative;
top:60px;
right:-350px;
}
#sideimage
{
position:relative;
top:190px;
right:-100px;
height:2000px;
width:50px;
}
#downimage
{
position:relative;
top:-1900px;
right:-10px;
height:50px;
width:1500px;
}
#maincontent1
{
position:absolute;
top:500px;
right:10px;
height:400px;
width:900px;
background-color:white;
}
#AboutUs
{
color:white;
font-size:125%;
position:absolute;
top:520px;
right:-5px;
margin-right:10px;
margin-left:10px;
}

h1
{
color:#FF9800;

margin-right:10px;
right:1100px;
border-bottom:2px pink solid;
}
#ha1
{
position:absolute;
top:450px;
}
#ha2
{
position:absolute;
top:750px;
right:1003px;
}
#ha3
{
position:absolute;
top:1100px;
right:1010px;
}
#ha4
{
position:absolute;
top:1450px;
right:1040px;
}
#ha5
{
position:absolute;
top:1800px;
right:1040px;
}
#ha6
{
position:absolute;
top:2150px;
right:940px;
}
h2
{
color:white;

width:1200px;
right:50px;
margin-bottom:20px;
}
#a
{
position:absolute;
top:550px;
}
#b
{
position:absolute;
top:850px;
}
#c
{
position:absolute;
top:1203px;
}
#d
{
position:absolute;
top:1550px;
}
#e
{
position:absolute;
top:1900px;
}
#f
{
  position:absolute;
  top:2250px;
}
.new

{
position:absolute;
right:550px;
}

a:hover{
  color:green;
}
}
.container{
  position:relative;
  text-align: center;
  margin-top: 360px;

}
.btn{
  border: 2px solid #3498db;
  background: none;
  padding: 10px 20px;
  font-size: 20px;
  font-family: "montserrat";
  cursor: pointer;
  margin: 10px;
  transition: 0.8s;
  position: relative;
  overflow: hidden;
  right:-455px;
}
.btn2{
  color: #3498db;
}

.btn2:hover{
  color: #fff;
}

.btn::before{
  content: "";
  position: absolute;
  left: 0;
  width: 100%;
  height: 0%;
  background: #3498db;
  z-index: -1;
  transition: 0.8s;
}
.btn2::before{
  bottom: 0;
  border-radius: 50% 50% 0 0;
}
.btn2:hover::before{
  height: 180%;
}









</style>
</head>

<body>

<div id="topbar">
<a href="webpageusingcss.php"><img id="logo" src="logo.png" ></a>
<div id="sign-in" class="top-barsection">
<a href="webpageusingcss.php"><img id="sign-inimage" src="Profile-512.png"></a>
<span id="login">Log-Out</span>
</div>

<div id="Room-Cleaning" class="top-barsection">
<a href="roomcleaning.php"><img id="garbageimage" src="garbage.png"></a> 
<span id="login">Room-Cleaning</span>
</div>
<div id="Night-Canteen" class="top-barsection">
<a href="nightcanteen.php"><img id="foodimage" src="food2.png"></a>
<span id="login">Night-Canteen</span>
</div>
<div id="maintenance" class="top-barsection">
<a href="maintenance.php"><img id="repairimage" src="maintenance6.png"></a>
<span id="login">Maintenance</span>
</div>
<div id="tracking" class="top-barsection">
<a href="map.php"><img id="gpsimage" src="gps4.png"></a>
<span id="login">Cab-Tracking</span>
</div>
<div id="Emergency-Services" class="top-barsection">
<a href="ambulance.php"><img id="hospitalimage" src="hospital.png"></a>
<span id="login">Emergency Services</span>
</div>
</div>
<div>
<img id="appsolutelogo"src="appsolutelogo.png">
</div>
<div id="maincontent">
<img id="sideimage"  src="capture.jpg">
<img id="downimage" src="line.jpg">
<h1 id="ha1">About Us</h1>
<h2 id="a" >This is a website which let VITian to register for room cleaning,
order food from night-canteen,check the location of shuttle and to reister
complain and call ambulance.</h2>
<h1 id="ha2" class="column">Room-Cleaning</h1>
<h2 id="b">On clicking on the link given below you will be redirected to a webpage to
register for room cleaning.
<br><br><br>
<div class="container" >
  
  <a href="roomcleaning.php"><button class="btn btn2">Register Here</button></a>
  
</div>

</h2>
<h1 id="ha3">Night-Canteen</h1>
<h2 id="c">Now book your food from your respective night-canteen and take it 
when your token number comes.
<br><br><br>
<div class="container" >
  
  <a href="nightcanteen.php"><button class="btn btn2">Order your food</button></a>
  
</div>
</h2>
<h1 id="ha4">Maintenance</h1>
<h2 id="d">Now register your complain for any appliances related problem of 
your hostel room .
<br><br><br>
<div class="container" >
  
  <a href="maintenance.php"><button class="btn btn2">Register Here</button></a>
  
</div>

</h2>
<h1 id="ha5">Cab-Tracking</h1>
<h2 id="e">Now no more wait for a shuttle just check the location of your cab from the 
given link.
<br><br><br>
<div class="container" >
  
  <a href="map.php"><button class="btn btn2">Locate your shuttle</button></a>
  
</div>


</h2>
<h1 id="ha6">Emergency-Services</h1>
<h2 id="f">No need to go to block guard to call ambulance directly call ambulance from the given link.
  <br><br><br>
  <div class="container" >
  
    <a href="ambulance.php"><button class="btn btn2">Call Ambulance</button></a>
    
  </div>


</div>





</div>

</body>
</html>
