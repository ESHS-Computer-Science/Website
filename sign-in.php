<!DOCTYPE html>
<html>
    <head>
      <title>Get test</title>
      <link rel='stylesheet' type="text/css" href='sign.css'/> 
    </head>
    <body>
    <form action = "sign-in.php" method = "post">
      <input type = "text" name = "name"/>
      <input type = "submit" value = "submit"/>
    </form>
    <?php 
        
    $myName = $_POST['name']; 
    echo "<p>" . $myName . "</p>";
    
    ?>
    
    </body>
</html>