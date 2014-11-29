<!DOCTYPE html>
<html lang="en">

        <?php
          error_reporting(-1);
          ini_set('display_errors', 'On');

           include 'funs.php';
           head("round_about"); ?>
 <body>
    <div class="container">

<?php navbar("Location") ?>

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Location
                    <small></small>
                </h1>
            </div>

            <div class="col-lg-12">
                <h2 class="page-header"><a href="http://www.chabadyale.org/">Chabad House</a> <small>Classes</small>
                </h2>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-8">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:700px;"><div id="gmap_canvas" style="height:300px;width:700px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}#maps{width:700px;font-size:10px;font-family:arial;text-align:right;}</style></div><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><script type="text/javascript">jQuery(document).ready(function(){jQuery('.gmap').hide();jQuery("#maps span").click(function() {var $this = $(this);$this.next("div").fadeToggle();$('.gmap').not($this.next("div")).fadeOut();});});</script><script type="text/javascript"> function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(41.311295,-72.9332359),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.311295, -72.9332359)});infowindow = new google.maps.InfoWindow({content:"<b>Chabad House</b><br/>36 Lynwood<br/> New Haven" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script><div id="maps"><div class="gmap"></div></div>
        </div>
 
            <div class="col-lg-4">
              <img height="300" src="imgs/chabad.jpg">
            </div>

            <div class="col-lg-12">
                <h2 class="page-header"><a href="http://www.newhavenhotel.com/"> New Haven Hotel</a> <small>Lodging</small></h2>
            </div>
        </div>

        <div class="row">
        
            <div class="col-lg-8">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:700px;"><div id="gmap_canvas2" style="height:300px;width:700px;"></div><style>#gmap_canvas2 img{max-width:none!important;background:none!important}#maps2{width:700px;font-size:10px;font-family:arial;text-align:right;}</style></div><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><script type="text/javascript">jQuery(document).ready(function(){jQuery('.gmap').hide();jQuery("#maps span").click(function() {var $this = $(this);$this.next("div").fadeToggle();$('.gmap').not($this.next("div")).fadeOut();});});</script><script type="text/javascript"> function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(41.305017,-72.92928999999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas2"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.305017, -72.92928999999998)});infowindow = new google.maps.InfoWindow({content:"<b>New Haven Hotel</b><br/> 229 George St<br/> New Haven" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script><div id="maps2"><div class="gmap">supported by <a href="http://www.sparbalu.com">www.sparbalu.com</a></div></div>
            </div>
 
            <div class="col-lg-4">
              <img height="300" src=http://media.expedia.com/hotels/1000000/40000/36800/36721/36721_10_b.jpg>
            </div>


            <div name="elec" class="col-lg-12">
                <h2 class="page-header"><a href="https://grovenewhaven.com/">The Grove</a> <small>Offices</small></h2>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-8">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:700px;"><div id="gmap_canvas3" style="height:300px;width:700px;"></div><style>#gmap_canvas3 img{max-width:none!important;background:none!important}#maps3{width:700px;font-size:10px;font-family:arial;text-align:right;}</style></div><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><script type="text/javascript">jQuery(document).ready(function(){jQuery('.gmap').hide();jQuery("#maps3 span").click(function() {var $this = $(this);$this.next("div").fadeToggle();$('.gmap').not($this.next("div")).fadeOut();});});</script><script type="text/javascript"> function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(41.3048613,-72.9235253),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas3"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.3048613, -72.9235253)});infowindow = new google.maps.InfoWindow({content:"<b>The Grove</b><br/>760 Chapel St<br/> New Haven" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script><div id="maps3"><div class="gmap">supported by <a href="http://www.sparbalu.com">www.sparbalu.com</a></div></div>
            </div>
 
            <div class="col-lg-4">
              <img height="300" src="http://missionbranding.com/wp-content/uploads/2014/05/grove-exterior-300px.jpg">
            </div>


        </div>
        

       <footer>
        <br><br><br><br><br><hr>
       </footer>

    </div>
    <!-- /container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
