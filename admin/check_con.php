<?php
  
  $servername = "localhost";
  $username = "engrafts_aurangabaddistillery"; 
  $password = "nQK2}?ydXg95";
  $dbname = "engrafts_aurangabaddistillery";


 $conn = mysqli_connect($servername, $username, $password, $dbname); 

if (!$conn){     
 		die("Connection failed: " . mysqli_connect_error()); 
}

?>