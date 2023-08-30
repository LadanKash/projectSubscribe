<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Final project Ladan Kashany</title>
   <link rel="stylesheet"  href="style.css">   
  
</head>

<body>
            <div class="container">
            <h2>Create Account</h2>
            <div class="form-section">
              <form action="#" method="post">
                <label for="user_name">User name</label>
                <input type="text" id="user_name" name="user_name"><br>

                <label for="email">Email</label>
                <input type="text" id="email" name="email" ><br>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" ><br>

                <input type="submit" value="submit" onclick="onClickEvent()">
            </form>
            <p>Already have an account? <a href="login.html">Log in</a></p>
        </div>
        </div>
      </div>

<!--footer-->
  <div>
    <div class="footer-container">
      <p class="footer">© Final Project</p>
       </div>
</footer>


<?php

// Server info

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "subscribe";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
// Query
$sql = "INSERT INTO users (user_name, password, email) VALUES ('$_POST[user_name]','$_POST[password]','$_POST[email]')";
// Check data creation

if (!mysqli_query($conn, $sql)){ 
die('Error: ' . $conn_error());
}
echo "<i>Welcome!New record created successfully</i>"; 
$conn->close();

?>
    <script>
        function onClickEvent() {
            alert("Welcome! Now you can go to the login page.");
        }
    </script>  

 
</body>
</html>
