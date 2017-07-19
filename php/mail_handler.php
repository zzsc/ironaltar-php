
<?php 
if($_POST){
    $to = "poczta@etronik.pl"; // this is your Email address poczta@etronik.pl
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Zapytanie z WWW";
    $subject2 = "Potwierdzenie wysłania zapytania do IRON ALTAR";

    $name =  $_POST['name'];
    $number =  $_POST['number'];
    $message = "Od: " . $name ."<br>Nr tel: ". $number ."<br>E-mail: ". $from ."<br>". $_POST['message'];
    $message2 = "Dziękujemy " . $name . ", wkrótce się skontaktujemy";
   
    $headers =
    'Content-Type:text/html;charset=UTF-8' . "\r\n" .
   'From:' . $from . "\r\n" .
   'Reply-To:'.$from . "\r\n" .
   'X-Mailer: PHP/' . phpversion();

    $headers2 =
    'Content-Type:text/html;charset=UTF-8' . "\r\n" .
   'From:' . $to . "\r\n" .
   'Reply-To:'.$to . "\r\n" .
   'X-Mailer: PHP/' . phpversion();

    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>