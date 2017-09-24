<?php
    if(isset($_POST['submit'])) {       
        $name = (isset($_POST['full_name']) ? $_POST['full_name'] : null);
        $email = (isset($_POST['email']) ? $_POST['email'] : null);
        $contact_number = (isset($_POST['contact_number']) ? $_POST['contact_number'] : null);
        $subject = (isset($_POST['subject']) ? $_POST['subject'] : null);
        $message = (isset($_POST['message']) ? $_POST['message'] : null);

        $msg = "Subject : " . $name . "\r\n";
        $msg = "Sender's name : " . $name . "\r\n";
        $msg .="Email : " . $email . "\r\n";
        $msg .="Contact Number : " . $contact_number . "\r\n";
        $msg .="\r\nMessage: \r\n" . $message;
        $msg = wordwrap($msg,100);
        $headers ="Message:";
        mail("charina10181990@gmail.com",$subject,$msg,$headers);
        header("location: contact_us.php?messageSent=1#contact");
    }else
    {
        header("location: contact_us.php?messageSent=2#contact");
    }
 
?>