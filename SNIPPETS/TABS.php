<!DOCTYPE html>

<meta lang = "en"/>
<meta charset = "utf-8"/>
<meta name = "author" http-equiv = "Molly Carlson"/>
<meta name = "description" content = "This is a repeating instance of the main tab bar for this site. "/>

<link rel = "stylesheet" type = "text/css "href = "../CSS/index.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
<link rel = "stylesheet" href ="https://fonts.googleapis.com/css?family=Lato"/>
<link rel = "stylesheet" href= "https://fonts.googleapis.com/css?family=Playfair+Display"/>

<div class = "container-fluid">
  <div class = "row" id = "tab-container">
    
       <!-- ideas for javascript 
          resize the toggle function for the drop down menu
          hover functionality

          okay this is really all you can do with tabs
       
       -->

         <div class = "col">
           <div class = "dropdown" dataAnimation = "slideInDown, slideUpOut,800">

             <button class = "btn" type = "button" id = "dropdownMenuButton" data-toggle="dropdown" aria-haspopup = "true" aria-expanded="false" style = "font-size:18px; text-align:center;">
               <span> About Us </span>
             </button>
             <ul class = "dropdown-menu-list dropdown-menu dropdown-menu-right" id = "dropdown-menu-toggle" aria-labelledby="dropdownMenuButton" onhover = toggleDown()>
               <li class = "dropdown-menu-section-1"><a class = "dropdown-item" href = "#"> About Us </a></li>
               <li class = "dropdown-menu-section-1"><a class = "dropdown-item" href = "#"> Newsletter </a></li>
            </ul>
           </div>
         </div> 

         <div class = "col">
         <div class = "dropdown">
          <button class = "btn" type = "button" id = "dropdownMenuButton" data-toggle="dropdown" aria-haspopup = "true" aria-expanded="false" style = "font-size:18px; text-align:center;">
           <span id = "my-menu-button"> Programs </span>
           </button>
           <ul class = "dropdown-menu-list dropdown-menu dropdown-menu-right" id = "dropdown-menu-toggle" aria-labelledby="dropdownMenuButton" onhover = toggleDown()>
              <li class = "dropdown-menu-section-1"><a class = "dropdown-item" href = "#"> Kids </a></li>
              <li class = "dropdown-menu-section-1"><a class = "dropdown-item" href = "#"> Teens </a></li>
              <li class = "dropdown-menu-section-2"><a class = "dropdown-item" href = "#"> Adults </a></li>
          </ul>
           </div>
         </div>

         <div class = "col">
            <div class = "dropdown">
              <button class = "btn" type = "button" id = "dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style = "font-size:18px; text-align:center;">
                <span> Library Services </span>
              </button>
              <ul class = "dropdown-menu-list dropdown-menu dropdown-menu-right" id = "dropdown-menu-toggle"  aria-labelledby="dropdownMenuButton" onhover = toggleDown()>
                
                <li class = "dropdown-menu-section-1"><a class = "dropdown-item" href = "#">Digital Resources</a></li>
                <li class = "dropdown-menu-section-1"><a class = "dropdown-item" href = "#">Meeting Room</a></li>
                <li class = "dropdown-menu-section-2"><a class = "dropdown-item" href = "#">Drive Thru</a></li>
                <li class = "dropdown-menu-section-2"><a class = "dropdown-item" href = "../services/dropBoxes.php"> Drop Boxes</a></li>
                <li class = "dropdown-menu-section-3"><a class = "dropdown-item" href = "#"> For Teachers</a></li>
              </ul>
            </div>    
          </div> 
         
         <div class = "col">
           <div class = "dropdown">
             <button class = "btn" type = "button" id = "dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style = "font-size:18px; text-align:center;">
               <span> New Patrons </span>
             </button>
             <ul class = "dropdown-menu-list dropdown-menu dropdown-menu-right" id = "dropdown-menu-toggle" aria-labelledby="dropdownMenuButton" onhover = toggleDown()>
               <li class = "dropdown-menu-section-1"><a class = "dropdown-item" href ="#"> Get a Library Card </a></li>
               <li class = "dropdown-menu-section-1"><a class = "dropdown-item" href ="#"> Search our Catalog </a></li>
            </ul>
           </div>
         </div> 

         <div class = "col">
           <div class = "dropdown">
             <button class = "btn" type = "button" id = "dropdownMenuButton" data-toggle = "dropdown" aria-haspopup="true" aria-expanded=false style = "font-size:18px; text-align:center;">
               <span> Additional Resources </span>
             </button>
             <ul class = "dropdown-menu-list dropdown-menu dropdown-menu-right" id = "dropdown-menu-toggle"  aria-labelledby="dropdownMenuButton" onhover = toggleDown()>
               <li class = "dropdown-menu-section-1"><a class = "dropdown-item" href = "#"> Bookmobile </a></li>
               <li class = "dropdown-menu-section-1"><a class = "dropdown-item" href = "#"> Kentucky Talking Book Library</a></li>
               <li class = "dropdown-menu-section-2"><a class = "dropdown-item" href = "#"> Virtual Book Library </a></li>
               <li class = "dropdown-menu-section-2"><a class = "dropdown-item" href = "#"> Geneology Resources </a></li>
             </ul>
          </div>
         </div> 
         <div class = "col">
           <div class = "dropdown">
             <button class = "btn" type = "button" id = "dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style = "font-size:18px; text-align:center;">
               <span> Rules and Policies </span>
             </button>
             
             <ul class = "dropdown-menu-list dropdown-menu dropdown-menu-right" id = "dropdown-menu-toggle" aria-labelledby="dropdownMenuButton" onhover = toggleDown()>
               <li class = "dropdown-menu-section-1"><a class = "dropdown-item" href = "#"> Patron Code of Conduct </a></li>
               <li class = "dropdown-menu-section-1"><a class = "dropdown-item" href = "#"> Meeting Room Guidelines </a></li>
               <li class = "dropdown-menu-section-2"><a class = "dropdown-item" href = "#"> Using the Computers </a></li>
              <ul>
            
           </div>
         </div> 

         <div class = "col">
           <div class = "dropdown">
             <button class = "btn" type = "button" id = "dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style = "font-size:18px; text-align:center;">
               <span> Contact Us </span>
             </button>
             <ul class = "dropdown-menu-list dropdown-menu dropdown-menu-right" id = "dropdown-menu-toggle" aria-labelledby="dropdownMenuButton" onhover = toggleDown()> 
               <li class = "dropdown-menu-section-1"><a class = "dropdown-item" href = "#"> Hours and Location </a></li>
               <li class = "dropdown-menu-section-1"><a class = "dropdown-item" href = "#"> Contact Information</a></li>
               <li class = "dropdown-menu-section-2"><a class = "dropdown-item" href = "#"> Write to Us </a></li>
            </ul>

          </div>
         </div>

         <script type = "text/javascript">

         function toggleDown() {
           var toggleList = document.getElementById('dropdown-menu-toggle');

            $(toggleList).toggle(600);
         }
          
          
         </script>

      
   
  </div>
</div>
