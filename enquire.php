<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'vendor/autoload.php';
    
    $mail = new PHPMailer(true);
    
    try {
        $mail->SMTPDebug = 2;                   // Enable verbose debug output
        $mail->isSMTP();                        // Set mailer to use SMTP
        $mail->Host       = 'relay-hosting.secure.net';                    
        $mail->SMTPAuth   = true;               // Enable SMTP authentication
        $mail->Username   = 'md@aurangabaddistillery.com';     // SMTP username
        $mail->Password   = 'AurangabadDistillery@123456';         // SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 25;     

        $mail->setFrom('md@aurangabaddistillery.com', 'Aurangabad Distillery');    // Set sender of the mail
        $mail->addAddress('sbdhakne309@gmail.com');    // Name is option

        $fname = $_POST["fname"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        $message = $_POST["message"];
    
        $mail->isHTML(true);                                  
        $mail->Subject = 'Enquire Now Form Details';
        $mail->Body    = 'Enquire Now Form Details : <br /><br /> <b> Full Name : </b> : '.$fname.' <br /> <b> Email : </b> '. $email.' <br /> <b> Contact : </b> '. $contact .' <br /> <b> Message : </b> '. $message .' ';
        // $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send();
        ?>
            <html>
                <head></head>
                <body>
                    <script> alert("Details Submitted Successfully"); window.location="/"; </script>
                </body>
            </html>
        <?php
        // echo "Mail has been sent successfully!";
    } catch (Exception $e) {
        ?>
            <html>
                <head></head>
                <body>
                    <?php echo $e; ?>
                    <script> 
                        // alert("Error : Try after some time..."); 
                        // window.location="/"; 
                    </script>
                </body>
            </html>
        <?php
    }
?>
