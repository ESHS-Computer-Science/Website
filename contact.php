<!DOCTYPE html>
  <html lang="en">
    <head>
      <title>Home of ESHS-Computer-Science-Club</title>
       <!--This is a link to the Bootstrap CDN for version 3.3.5-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      
      <!--This allows for mobile support-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!--This connects my Sass/CSS file to the html-->
      <link rel='stylesheet' type="text/css" href='contact.css'/>
    
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      
      <!--Google Font for Bitter-->
      <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
      
      <!--This Connects 2.1.4 version of JQuery to the Site-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      
      <!--This connects my Javascript file -->
      <script src="contact.js"></script>
      
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
            <div id = "body">
              <div id = "content"><!--Add all html code to the inbetween this specific div -->
                <p class = "title-large">Contact Information</p>
                <div class = "container-fluid">
                  <div class = "row">
                    <div class = "col-md-6">
                      <img src="Images/Photos_CyberPatriot6/ESHS-CP7_poster11x17NFS-Top10Mtgs.jpg" id = "contact-image">
                    </div>
                    <div class = "col-md-6">
                      <h1 class = "contact-title-text">School Address:</h1>
                        <p class = "contact-text">El Segundo High School</p>
                        <p class = "contact-text">640 Main Street</p>
                        <p class = "contact-text">El Segundo, CA 90245</p>
                        

                      <h1 class = "contact-title-text">Contact Email:</h1> 
                      <p class = "contact-text">eshscompsci@gmail.com</p>
                      <p class = "contact-text">We will try to repond as soon as possible:</p>
                      <form action="contact-form.php" method="post">
                        <legend>Contact Form</legend>
                        <fieldset>
                          Firstname: <input type="text" name="firstname"><br><br>
                          Lastname: <input type="text" name="lastname"><br><br>
                          Subject: <input type="text" name="subject"><br><br>
                          Email: <input type="text" name="email"><br><br>
                          Enter Message: <textarea name="message"></textarea><br><br>
                        <input type="submit" value="submit">
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
       <!--This is where the footer begins-->
        <?php include "includes/footer.php"; ?>
    </body>
</html>