<?php require_once("/Users/workaccount/LIS467Site/SNIPPETS/HEADER.php"); ?>

<?php require_once("/Users/workaccount/LIS467Site/SNIPPETS/TABS.php"); ?>

 <meta charset = "UTF-8"/>
<meta name = "viewport" contents = "width=device-width, initial-scale=1.0, shrink-to-fit=no"/> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel = "stylesheet" href = "CSS/index.css" type = "text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Google Fonts -->
<link rel = "stylesheet" href ="https://fonts.googleapis.com/css?family=Lato"/>
<link rel = "stylesheet" href= "https://fonts.googleapis.com/css?family=Playfair+Display"/>

<!-- Animate.css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<script src = "/JS/quickScript.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

 <div class="container-fluid">
     <div class = "row">
         <div class = "col">
             <p id = "home-blurb-title"> <strong>Welcome to the Pendleton County Public Library</strong> </p>
             <p id = "home-blurb"> This is a website for the community by the community. The goal of PCP Library’s website is to create a location in which users can easily access information about the library. In creating a destination online for access through the community, Pendleton County Public Library’s website will be a way for people to stay connected. Easy, clean, and organized are key-words we’d like the community & users to think about our website.</p>
         </div>
    </div>

<div class = "row">
    <div class = "col">
        <div id="event-carousel" class="carousel slide pull-center" data-ride="carousel" style = "position:relative;">
        <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#event-carousel" data-slide-to="0" class="active my-carousel-items" id = "my-carousel-item-1"></li>
                <li data-target="#event-carousel" data-slide-to="1" class = "my-carousel-items" id = "my-carousel-item-2"></li>
                <li data-target="#event-carousel" data-slide-to="2" class = "my-carousel-items" id = "my-carousel-item-3"></li>
            </ol>

        <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="IMG/467_3_img1.jpeg" class = "img-responsive" alt="Storytelling" id = "carousel-img">
                        <div id = "my-carousel-item-1">
                            <span class = "carousel-span">
                                <p class = "carousel-title"> Storytelling with Audobon </p>
                            </span>
                        </div>
                </div>
                <div class="item">
                    <img src="IMG/476_3_img2.jpg" class = "img-responsive" alt="3D Printing" id = "carousel-img">
                    <div class id = "my-carousel-item-2">
                        <span class = "carousel-span"> 
                            <p class = "carousel-title"> 3D Printing Workshop </p>
                        </span>
                    </div>
                    
                </div>
    
                <div class="item">
                    <img src="IMG/467_3_img32.png" class = "img-responsive" alt="Movie Night" id = "carousel-img">
                    <div class id = "my-carousel-item-3">
                        <span class = "carousel-span">
                            <p class = "carousel-title">Inside Out Premiere </p>
                        </span>
                    </div>
                </div>
                <button class = "btn" id = "carousel-btn" onclick="document.getElementById('carousel-btn').innerText = updateDesc();"> More Information </button> 

            </div>

            

        <!-- Left and right controls -->
            <a class="left carousel-control" href="#event-carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#event-carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div class = "row pull-right" id = "carousel-blurbs">
    <div class = "col-md-4 col-sm-12">
        <p id = "carousel-blurb-event"><strong>Storytelling with Audobon <strong></p>
        <p>Sunday November 18th, 2018 at 3pm</p>
    </div>

    <div class = "col-md-4 col-sm-12">
        <p id = "carousel-blurb-event"><strong>3D Printing Workshop </strong></p>
        <p> Friday November 16th, 2018 at 11am </p>
    </div>

    <div class = "col-md-4 col-sm-12 pull-right">
        <p id = "carousel-blurb-event"><strong>Inside Out Premiere</strong></p>
        <p> Tuesday November 20th, 2018 at 1pm</p>
    </div>
</div>

<script type = "text/javascript">

    function updateDesc(){
        let blurbs = document.getElementById('carousel-blurbs');
        $(blurbs).toggle(500);
        
                        
        var newBtnString = "More Information";
        return newBtnString;
}
            
</script>
  

<div class = "row" style = "margin-left: 5%; margin-top:8%; position:relative;">
    <div class = "col-md-12 col-sm-12" id = "available-resources">
        <p style = "font-size:24px;"> Available Resources </p>
    </div>
</div>

<div class = "row" style = "margin-left: 2%; margin-top:8%;">
    <div class = "col-md-4 col-sm-12">
        <img class = "img-fluid img-thumbnail home-img" src = "../IMG/resources_1.jpg" alt = "Resource"/>
        <div>
            <p class = "home-sr-segment-title"> Bookmobile </p>
            <p class = "home-sr-segment"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
    </div>

    <div class = "col-md-4 col-sm-12">
        <img class = "img-fluid img-thumbnail home-img" src = "../IMG/resources_2.jpg" alt = "Resource"/>
        <div>
            <p class = "home-sr-segment-title"> Geneology </p>
            <p class = "home-sr-segment"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>

    <div class = "col-md-4 col-sm-12">
        <img class = "img-fluid img-thumbnail home-img" src = "../IMG/resources_3.jpg" alt = "Resource"/>
        <div>
            <p class = "home-sr-segment-title"> Book Sales </p>
            <p class = "home-sr-segment">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>

</div>

<div class = "row pull-right">
    <div class = "col pull-right">
    <button type = "button" id = "more-features-btn" href = "/resources-overview.php"> Please click here for additional resources  </button>
    </div>
</div>

<div class = "row" style = "margin-left: 5%; margin-bottom: 2%; margin-top:10%;">
    <div class = "col-md-12 col-sm-12">
        <h3> Available Services </h3>
    </div>
</div>

<div class = "row" style = "margin-left: 2%;">
    <div class = "col-md-4 col-sm-12">
        <img class = "img-fluid img-thumbnail home-img" src = "../IMG/services_1.jpg" alt = "Service"/>
        <div>
            <p class = "home-sr-segment-title"> Homework Help </p>
            <p class = "home-sr-segment"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
    </div>

    <div class = "col-md-4 col-sm-12">
        <img class = "img-fluid img-thumbnail home-img" src = "../IMG/services_2.jpg" alt = "Service"/>
        <div>
            <p class = "home-sr-segment-title"> Talking Books Services </p>
            <p class = "home-sr-segment"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>

    <div class = "col-md-4 col-sm-12">
        <img class = "img-fluid img-thumbnail home-img" src = "../IMG/services_3.jpg" alt = "Service"/>
        <div>
            <p class = "home-sr-segment-title"> Meeting Room </p>
            <p class = "home-sr-segment"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>

</div>
<div class = "row pull-right">
<div class = "col pull-right">
<button type = "button" id = "more-features-btn" href = "/services-overview.php"> Please click here for additional services </button>
</div>
</div>
    

</div>

</div>




 

<?php require_once("/Users/workaccount/LIS467Site/SNIPPETS/FOOTER.php"); ?>
          
