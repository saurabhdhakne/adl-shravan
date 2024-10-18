<?php 

    include './admin/check_con.php';

  try{

      $fname = $_POST["fname"];
      $email = $_POST["email"];
      $contact = $_POST["contact"];
      $msg = $_POST["message"];
      
      $sql = "INSERT INTO enquires(`fname`,`email`,`contact`,`msg`) VALUES ('$fname','$email','$contact','$msg')";

        if (mysqli_query($conn,$sql))
        {    
            ?>
            <html> <script> alert('Form Submitted Successfully!!!'); window.location="/"; </script></html>
            <?php
        }
        else 
        {
                ?>
                <html> <script> alert('ERR : Try after sometime!!!'); window.location="/"; </script></html>
                <?php

            // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }

    catch(Exception $e){
        // echo $e;
        ?>
            <html> <script> alert('ERR : Try after sometime!!!'); window.location="/"; </script></html>
            <?php
    }
?>