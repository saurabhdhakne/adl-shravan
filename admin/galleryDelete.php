<?php 
    include 'check_con.php';
    $id = $_GET['id'];
    $img = $_GET['img'];

    try{

        $sql = "DELETE FROM gallery WHERE id='$id' ";

        if (mysqli_query($conn,$sql))
        {    
            if (file_exists($img)) {
                unlink($img);
                echo 'File '.$img.' has been deleted';
              } else {
                echo 'Could not delete '.$img.', file does not exist';
              }
            ?>
                <html> <script> alert('Image Deleted Successfully!!!'); </script></html>
            <?php
                header('location:gallery.php');
        }
        else 
        {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }
    catch (customException $e) {
        echo $e->errorMessage();
    }


    
?>