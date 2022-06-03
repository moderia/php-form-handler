<html>
  <head>
    <title>world's smallest form handler</title>
  </head>
  <body>
    <h1>World's smallest form handler</h1>

    <?php
    if(isset($_POST["FirstName"])){ //show data

    echo $_POST["FirstName"];
      
    } else { // show form
      echo '
     <form method="post" action="">
      <P>First Name: <input type="text" name="FirstName"/></P>
      <p><Input type= "submit" /></p>
     </form>

           ';
    }
  
   ?>
  </body>
</html>
