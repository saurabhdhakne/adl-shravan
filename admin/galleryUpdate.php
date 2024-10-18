<?php 
    include 'check_con.php';
    $id= $_POST['id'];
    $title = $_POST['title'];

    $sql = "UPDATE gallery SET title = '". $title."' WHERE id = ".$id;

    if (mysqli_query($conn,$sql))
    {    
        ?>
        <html> <script> alert('Gallery Updated Successfully!!!'); </script></html>
        <?php
        header('location:gallery.php');
    }
    else 
    {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


?>