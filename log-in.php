<?php
$filename = "users.txt"; // the path to the file containing user information

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $file = fopen($filename, "r");
  if ($file) {
    while (($line = fgets($file)) !== false) {
      $user = explode(",", $line);
      if ($user[0] == $email && trim($user[1]) == $password) {
        // the email and password match a user in the file
        echo "Login successful!";
        header("Location: listEmployee.php");
        exit();
        // perform any additional actions, such as setting session variables or redirecting to another page
        break;
       
      }
      else {
      	 echo "Login failure!";
      	 }
      
    }
    fclose($file);
  } else {
    echo "Error: Unable to open file.";
  }
}
?>

<!doctype html>
    <html>
    <head>
    <meta charset="UTF-8">
    <title>BBK Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Stint+Ultra+Expanded" rel="stylesheet">
    <style>
    @import url(.css);
    
    </style>
</head>
   
<body>
  <div id="container">
   <header>
   	<h1><img src="BBK-logo.png " alt="BKK_Towing_logo"></h1>
    	<h1>Employee Log In</h1>

<div align="center">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  
  	 <table border="1" cellpadding="5"> <tr>
  	 
    <th><label for="email">User ID:</label></th>
    <td><input type="text" name="email" required></td><br>
    </tr>
    
    <tr>
    <th><label for="password">Password:</label></th>
    <td><input type="password" name="password" required></td><br>
    </tr>
    
    <tr>
    	<td colspan="2" align="center">
    		<input type="submit" value="Submit">
    	</td>
    </tr>
    </table>
  </form>
  
  </div>
  </header>
  </div>
  
  <aside id="info-contact-location">
                <h3>Contact</h3>
                <a><i>
                    <a href="request-form.html">email us</a><br>
                    (313) 874-3730<br>
                </i></a>
            
            
                <h3>Days and Hours</h3>
                <a>MON-SUN 9AM - 6PM</a>
            
                <h3>Location</h3>
                <a><i>BBK Towing and Recovery INC. <br>
                    1821 Trombly St, Detroit, MI 48211
                </a>
            </aside>
            
            <br>
            
            <footer>
            <p><small>All content copyright &copy; 2023, part of class project</small></p>
              
            </footer>
</body>
</html>

