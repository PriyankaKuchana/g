<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'phpmailer/src/Exception.php';
 require 'phpmailer/src/PHPMailer.php';
 require 'phpmailer/src/SMTP.php';
 
 if (isset($_POST["send"])) {
    
         $mail = new PHPMailer(true);
 
         // Server settings
         $mail->isSMTP();
         $mail->Host       = 'smtp.gmail.com';
         $mail->SMTPAuth   = true;
         $mail->Username   = 'svappssoftsolutionspvtltd@gmail.com';
         $mail->Password   = 'bciz lokl aumh dzbd';
         $mail->SMTPSecure = 'ssl';
         $mail->Port       = 465;
   // Sanitize user inputs
   $fname = $_POST["hname"];

$mobile = filter_var($_POST["hmobile"], FILTER_SANITIZE_NUMBER_INT);
$email = $_POST["hemail"];
$textarea=$_POST["textar"];

         // Recipients and content
         $mail->setFrom($email, $fname);
         $mail->addAddress('rohangade496@gmail.com');
         $mail->addReplyTo($email, $fname);
         $mail->isHTML(true);
         $mail->Subject = "ROYAL LANE DENTAL CARE";
 
       
 
         // Construct email body
         $mail->Body = "First Name : " . $fname.
        
         "<br> <br>Mobile Number : " . $mobile.
         "<br> <br>Email Id :" . $email.
         "<br> <br> Message :" . $textarea;
     
 
         // Send the email
         $mail->send();
 
         echo
         " 
         <script> 
          alert('Message was sent successfully!');
          document.location.href = 'index.html';
         </script>
         ";
 } 