<?php 
    include 'check_con.php';
    $id = $_GET['id'];
    $report = $_GET['report'];

    try{

        $sql = "DELETE FROM enquires WHERE id='$id' ";

        if (mysqli_query($conn,$sql))
        {    
            if (file_exists($report)) {
                unlink($report);
                echo 'File '.$report.' has been deleted';
              } else {
                echo 'Could not delete '.$report.', file does not exist';
              }
            ?>
                <html> <script> alert('Enquire Deleted Successfully!!!'); </script></html>
            <?php
                header('location:enquires.php');
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