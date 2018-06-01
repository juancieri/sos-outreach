<?php
$titlePage = "Contact Us";
$pageDescription = "";
$pageKeywords = "";
require("part-head.php");
?>

    <body id="thanks-page">
      
        <?php include_once("analyticstracking.php") ?>
        
        <?php require("part-header.php"); ?>
        
        <main>
            
            
            
            <!-- CONTACT US -->
            <section class="section first-section bg-white separator-before" id="contact-container">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h1 class="section-title">Contact us</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <form role="form" class="form" data-toggle="validator" method="post" action="">
                                <div class="form-group">
                                    <p>Message sent successfully. We wiill contact you ASAP.</p>
                                    <br>
                                    <a href="index.php" class="btn btn-menu">Back home</a>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <div id="map"></div>
                            <h2 class="map-title">Eagle Country, Colorado (Edwards)</h2>
                            <address class="map-address">
                                970.390.5590 450 <br>
                                Miller Ranch Road, Edwards, CO 81632
                            </address>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /CONTACT US -->
            
        </main>
        
        <?php require("part-footer.php"); ?>
        
        <?php require("part-script.php"); ?>
        
        <script>
            $(document).ready(function(){
                initCarousel();
                initLettering();
            });
        </script>
        <!-- GOOGLE MAP-->
        <script>
          google.maps.event.addDomListener(window, 'load', init);
          var map;
          function init() {
          var mapOptions = {
          center: new google.maps.LatLng(39.643453, -106.578680),
          zoom: 5,
          zoomControl: true,
          zoomControlOptions: {
          style: google.maps.ZoomControlStyle.DEFAULT,
          },
          disableDoubleClickZoom: true,
          mapTypeControl: true,
          mapTypeControlOptions: {
          style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
          },
          scaleControl: true,
          scrollwheel: true,
          panControl: true,
          streetViewControl: true,
          draggable : true,
          overviewMapControl: true,
          overviewMapControlOptions: {
          opened: false,
          },
          mapTypeId: google.maps.MapTypeId.ROADMAP
          }
          var mapElement = document.getElementById('map');
          var map = new google.maps.Map(mapElement, mapOptions);
          // LOCATIONS
          var locations = [

            ['Eagle Country', 'Colorado (Edwards)', '970.390.5590 450', 'Miller Ranc Road, Edwards, CO 81632', '', 39.643453, -106.578680, ''],

          ];
          for (i = 0; i < locations.length; i++) {
          if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
          if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
          if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
          if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
          if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
          marker = new google.maps.Marker({
          icon: markericon,
          position: new google.maps.LatLng(locations[i][5], locations[i][6]),
          map: map,
          title: locations[i][0],
          desc: description,
          tel: telephone,
          email: email,
          web: web
          });
          link = '';
          bindInfoWindow(marker, map, locations[i][0], description, telephone, email, web, link);
          }
          function bindInfoWindow(marker, map, title, desc, telephone, email, web, link) {
          var infoWindowVisible = (function () {
          var currentlyVisible = false;
          return function (visible) {
          if (visible !== undefined) {
          currentlyVisible = visible;
          }
          return currentlyVisible;
          };
          }());
          iw = new google.maps.InfoWindow();
          google.maps.event.addListener(marker, 'click', function() {
          if (infoWindowVisible()) {
          iw.close();
          infoWindowVisible(false);
          } else {
          var html= "<div style='color:#000;background-color:#fff;padding:5px;width:150px;'><h4>"+title+"</h4><p>"+desc+"<p><p>"+telephone+"<p>"+email+"</div>";
          iw = new google.maps.InfoWindow({content:html});
          iw.open(map,marker);
          infoWindowVisible(true);
          }
          });
          google.maps.event.addListener(iw, 'closeclick', function () {
          infoWindowVisible(false);
          });
          }
          }
        </script>
        
    </body>
</html>