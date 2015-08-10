<!DOCTYPE html>
  <html lang="en">
    <head>
      <title>Home of ESHS-Computer-Science-Club</title>
       <!--This is a link to the Bootstrap CDN for version 3.3.5-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      
      <!--This allows for mobile support-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!--This connects my Sass/CSS file to the html-->
      <link rel='stylesheet' type="text/css" href='gallery.css'/>
    
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      
      <!--Google Font for Bitter-->
      <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
      
      <!--This Connects 2.1.4 version of JQuery to the Site-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      
      <!--This connects my Javascript file -->
      <script src="gallery.js"></script>
      
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
      <!--Icon for web browser-->  
      <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <body>
      <?php include "includes/header.php"; ?>
      <!--Navagation Bar Begins-->
      <?php include "includes/navbar.php"; ?>
      <!--End of page navbar and header-->
<!--End of page navbar and header-->
            <div id="body">
              <div id="content"><!--Add all html code to the inbetween this specific div -->
                 <div class = "gallery">
                     <div class = "gallery-set" id = "cyberpatriots">
                         <h1><legend class="gallery-font">CyberPatriots Pictures</legend></h1>
                         <div class = "gallery-image-container">
                           <img src = "Images/Photos_CyberPatriot6/competition_action_shot.jpg" class = "image-block">
                           <p class = "description">this is going to be a description that will be below</p>
                         </div>
                     </div>
                      <div class = "gallery-set" id = "cyberpatriots">
                         <h1><legend class="gallery-font">CTF Pictures</legend></h1>
                         <div class = "gallery-image-container">
                           <img src = "Images/Photos_CyberPatriot6/competition_action_shot.jpg" class = "image-block">
                           <p class = "description">this is going to be a description that will be below</p>
                         </div>
                     </div>
                      <div class = "gallery-set" id = "cyberpatriots">
                         <h1><legend class="gallery-font">Zero Robotics Pictures</legend></h1>
                         <div class = "gallery-image-container">
                           <img src = "Images/Photos_CyberPatriot6/competition_action_shot.jpg" class = "image-block">
                           <p class = "description">this is going to be a description that will be below</p>
                         </div>
                         <div class = "gallery-image-container">
                           <img src = "Images/Photos_CyberPatriot6/competition_action_shot.jpg" class = "image-block">
                           <p class = "description">this is going to be a description that will be below</p>
                         </div>
                         <div class = "gallery-image-container">
                           <img src = "Images/Photos_CyberPatriot6/competition_action_shot.jpg" class = "image-block">
                           <p class = "description">this is going to be a description that will be below</p>
                         </div>
                         <div class = "gallery-image-container">
                           <img src = "Images/Photos_CyberPatriot6/competition_action_shot.jpg" class = "image-block">
                           <p class = "description">this is going to be a description that will be below</p>
                         </div>
                        <div class = "gallery-image-container">
                           <img src = "Images/Photos_CyberPatriot6/competition_action_shot.jpg" class = "image-block">
                           <p class = "description">this is going to be a description that will be below</p>
                         </div>
                     </div>


                 </div>
              </div>
            </div>
            
      <!--footer begins here-->
      <!--This is where the footer begins-->
      <?php require "includes/footer.php";?>

      <!--footer begins here-->
    </body>
</html>