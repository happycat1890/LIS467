
<?php 
    require_once("../SNIPPETS/HEADER.php"); 
    require_once("../SNIPPETS/TABS.php");
?>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<link rel = "stylesheet" type = "text/css" href = "../CSS/index.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>

 <!-- Google Fonts -->
 <link rel = "stylesheet" href ="https://fonts.googleapis.com/css?family=Lato"/>
 <link rel = "stylesheet" href= "https://fonts.googleapis.com/css?family=Playfair+Display"/>

<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<div class = "container-fluid">
  <div class = "row">
    <div class = "col">
        <h2 class = "ml-5 ml-lg-0" id = "title-div"> Drop Boxes
        </h2>
    </div>
  </div>
  <div class = "row">
    <div class = "col"> <!-- Description-->
        <p class = "service-desc"> We offer two drop boxes for our patrons’ convenience.  One is located in our parking lot so items can be dropped off after business hours.  The second is located at BB’s Shell Station in Butler.  All materials checked out from the Bookmobile or Library may be returned in the drop boxes.
        </p>
        <p class = "service-desc">
Materials will be picked up on Monday, Wednesday, and Friday from the drop box in Butler and at 8:30 am daily from the drop box in the Library parking lot.
        </p>
    </div>
        <div class = "col pull-right"> <!-- Maps -->
            <img id = "drop-box-img" src = "../IMG/drop_box.jpg"/>
        </div>
    </div>

  <div class = "row">
      <div class = "col">
      <button class = "service-btn btn-lg" id = "drop-box-btn"><span class = "service-btn-txt"> Directions to BB's Shell Station in Butler </span></button>
      </div>
 </div>

  <div class = "row" style = "padding-bottom: 5%;"> <!-- jQuery here -->
        <div class = "col pull-right">
            <div id = "drop-box-directions">
                    <ol>
                        <li> Head northeast on Robbins Ave toward Ridgeway Ave </li>
                        <li> Turn left at the 1st cross street onto US-27 N/Ridgeway Ave </li>
                            <ul>
                                <li>Continue to follow US-27 N</li>
                                <li>Pass by NAPA Auto Parts - Carson Auto & Tractor Supply (on the left in 0.2 mi)</li>
                                <li>Destination will be on the right</li>
                            </ul>
                    </ol>
                </div>

                <script type = "text/javascript">

                    /* toggle directions*/ 
                 $(document).ready(function(){
                        $("#drop-box-btn").click(function(){
                            $("#drop-box-directions").toggle(500);
                            $("#drop-box-map").toggle(500);
                        });
                    });
                </script>
            
        </div>
        <div class = "col-md-6">
            <div id = "drop-box-map"></div>

            <script>
                var dbMap = L.map("drop-box-map").setView([38.811080, -84.356000],13);
                L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                       attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributor',    
                       //other attributes.
                }).addTo(dbMap);
            </script>

        </div>
    </div>
          
        

  </div>
</div>

<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

<?php require_once("../SNIPPETS/FOOTER.php"); ?>