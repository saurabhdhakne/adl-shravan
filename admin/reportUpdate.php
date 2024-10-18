<?php 
    include 'check_con.php';
    $id= $_POST['id'];
    $title = $_POST['title'];
    $dateTime = $_POST['dateTime'];
    $reporttype = $_POST['reporttype'];

    $sql = "UPDATE reports SET title = '". $title."', dateTime = '".$dateTime."', reporttype = '".$reporttype."' WHERE id = ".$id;

    if (mysqli_query($conn,$sql))
    {    
        ?>
        <html> <script> alert('Report Updated Successfully!!!'); </script></html>
        <?php
        header('location:index.php');
    }
    else 
    {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


?>