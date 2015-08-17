<!DOCTYPE html>
  <html lang="en">
    <head>
      <title>Home of ESHS-Computer-Science-Club</title>
       <!--This is a link to the Bootstrap CDN for version 3.3.5-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      
      <!--This allows for mobile support-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!--This connects my Sass/CSS file to the html-->
      <link rel='stylesheet' type="text/css" href='style.css'/>
    
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      
      <!--Google Font for Bitter-->
      <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
      
      <!--This Connects 2.1.4 version of JQuery to the Site-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      
      <!--This connects my Javascript file -->
      <script src="app.js"></script>
      
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
      <!--Icon for web browser-->  
      <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <body>
      <header>
        <img src="Images/bannereshscompsci.png" id="header-background" class="shadow">
      </header>
      <?php include "includes/header.php"; ?>
      <!--Body content-->
        <!--Caroussal Begins-->
        <div id="myCarousel" class="carousel slide border" data-ride="carousel" data-interval="4000">
            
            <ol class="carousel-indicators">
			  
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
		    
            </ol>
            
            <div class="carousel-inner">
              
              <div class="item active carousel-image-size">
                
                <img src="Images/COLLECTIVEPICTURES/Group_Photo_fit.png" alt="Missing file Group_Photo_fit.png" data-slide-to="0">
                <div class="carousel-caption" id="box"><!--Carousal Text input-->
		          
                  <h3 class="carousal_text_font">CyberPatriots 2014-2015 Teams</h3>
		          <p class="carousal_text_font">Neteagles, Neteaglets, La Segundas, and ESMS Bulldogs</p>
	            
                </div>
              
            </div>
              
              <div class="item carousel-image-size">
                
                <img src="Images/Photos_CyberPatriot6/Finals_Cisco.jpg" alt="Error" data-slide-to="1">
                <div class="carousel-caption" id="box"><!--Carousal Text input-->
		          
                  <h3 class="carousal_text_font">CyberPatriots 6 2013-2014 Finals</h3>
		          <p class="carousal_text_font">Team Neteagles enters the Cisco Networking Challenge</p>
	            
                </div>
                  
              </div>
                
              <div class="item carousel-image-size">
                
                <img src="Images/Photos_CyberPatriot6/Final_Group.jpg" data-slide-to="2">
                <div class="carousel-caption" id="box"><!--Carousal Text input-->
		          
                  <h3 class="carousal_text_font">CyberPatriots 6 2013-2014 Finals Cookie Break</h3>
		          <p class="carousal_text_font">Time to enjoy the Festivities!</p>
                    
	            </div>
                  
              </div>
              <!-- Controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                  
              </a>
                
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			   
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
                  
	         </a>
                
            </div>
            
        </div>
         <!--Caroussal Ends-->
         <!--Navagation Bar Begins-->
         <?php include "includes/navbar.php"; ?>
        <!--Navagation Bar ends-->
        <div class="container-fluid background">
          <div class="row">
            <div class="col-md-7">
              <div id = "announcements"><!--Announcements container contains code for the announcements-->
                <h1  class="content-title">Announcements</h1>
                  <div class = "entry">
                    <div class = "entry-title">
                      Announcements for the first time???
                    </div>
                    <div class = "entry-content">
                      Hello this is just some text that looks nice on the website thanks adrian for all your work.
                    </div>
                  </div>
                  <div class = "entry">
                    <div class = "entry-title">
                      Second Announcements for the first time???
                    </div>
                    <div class = "entry-content">
                      Second Hello this is just some text that looks nice on the website thanks adrian for all your work.
                    </div>
                  </div>
            </div>
        </div>
        <div class="col-md-5"><!--This is going to be Where are Mission Statement will be-->
            <div id="mission-statement-box">
                <span id="mission-statement-title">Mission Statement</span>
                <p id="mission-statement-description">Hey there we want a great Future</p>
            </div>
        </div>
      </div>
    </div>
          <!--Calender Section-->
        <div class="container-fluid">
          
          <div class= "row">
            
            <div class="col-md-12">
                <p class="high-embold">Club Calender</p>
                
                <div id="upto-calendar-container-MkLO" class="upto-calendar-plugin"><script>!function(c,b,a){function d(h){var e=document.getElementById("upto-calendar-container-"+c),f=document.createElement("SCRIPT"),g="https://upto.com/js/plugin.js";f.onreadystatechange=function(){if(f.readyState==="loaded"||f.readyState==="complete"){f.onreadystatechange=null;h()}};f.onload=function(){h()};f.setAttribute("src",g);e.parentNode.insertBefore(f,e)}d(function(){upto.init(c)})}("MkLO");</script>
                </div>
            
            </div>
          
          </div>
            
       </div>
       <!--Footer begins here-->
       <?php include "includes/footer.php"; ?>
       <!--footer Ends here-->
         
    </body>
        
  </html>