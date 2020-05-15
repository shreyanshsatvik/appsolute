<?php
session_start();



?>
<html>
  <head>
    <title>Map</title>
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
      #map{
      top:30px;
      height:600px;
      width:60%;
      right:-480px;
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
    <a href="homepage.php"><img src="logo.png" id="logo"></a>
        <img id="sideimage"  src="capture.jpg">
    
    
        <div id="map"></div>
        <script>
          function initMap(){
            // Map options
            var options = {
              zoom:16,
              center:{lat:12.968493,lng:79.155928},
              styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
            }
      
            // New map
            var map = new google.maps.Map(document.getElementById('map'), options);
      
            // Listen for click on map
            google.maps.event.addListener(map, 'click', function(event){
              // Add marker
              addMarker({coords:event.latLng});
            });
      
            /*
            // Add marker
            var marker = new google.maps.Marker({
              position:{lat:42.4668,lng:-70.9495},
              map:map,
              icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
            });
      
            var infoWindow = new google.maps.InfoWindow({
              content:'<h1>Lynn MA</h1>'
            });
      
            marker.addListener('click', function(){
              infoWindow.open(map, marker);
            });
            */
      
            // Array of markers
            var markers = [
              {
                coords:{lat:12.969788,lng:79.158143},
                iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content:'<h1>SMV</h1>'
              },
              {
                coords:{lat:12.971129,lng:79.159535},
                content:'<h1>Technology Tower</h1>',
                iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
              },
              {
                coords:{lat:12.971479,lng:79.163658},
                content:'<h1>Silver Jubliee Tower</h1>',
                iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
              },
              {
                coords:{lat:12.968493,lng:79.155928},
                iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content:'<h1>Main Building</h1>'
              },
              {
                coords:{lat:12.974058,lng:79.164127},
                iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                content:'<h1>Q-Block</h1>'
              }
            
              
            ];
      
            // Loop through markers
            for(var i = 0;i < markers.length;i++){
              // Add marker
              addMarker(markers[i]);
            }
      
            // Add Marker Function
            function addMarker(props){
              var marker = new google.maps.Marker({
                position:props.coords,
                map:map,
                //icon:props.iconImage
              });
      
              // Check for customicon
              if(props.iconImage){
                // Set icon image
                marker.setIcon(props.iconImage);
              }
      
              // Check content
              if(props.content){
                var infoWindow = new google.maps.InfoWindow({
                  content:props.content
                });
      
                marker.addListener('click', function(){
                  infoWindow.open(map, marker);
                });
              }
            }
          }
        </script>
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBr_AFZgDc2n3SVRmBuUjTrs8qHTvajMTY&callback=initMap">
          </script>


  </body>
</html>