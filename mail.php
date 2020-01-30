<?php
    $secretKey = "6LfcUdQUAAAAAALmswBPdSQe7TNL0Fb5GsUq7clR";
    $statusMsg = "";

    if (isset($_POST['submit'])) {
        error_log('here');
        error_log($_POST['catpcha-response']);
        if (isset($_POST['captcha-response']) && !empty($_POST['captcha-response'])) {
            error_log('success');
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['captcha-response']);
            $responseData = json_decode($verifyResponse);
            error_log($verifyResponse);
            if ($responseData->success) {
            error_log('success again!');
                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];
                $formcontent="From: $name \n Message: $message";
        //        $recipient = "info@legacyhousetitle.com";
                $recipient = "leekinsella322@gmail.com";
                $subject = "Contact Form";
                $mailheader = "From: $email \r\n";
                mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
                $statusMsg = "Your contact request has submitted successfully.";
            } else {
                $statusMsg = "Robot verification failed, please try again.";
            }
        } else {
            $statusMsg = "Robot verification failed, please try again.";
        }
    }
    ?>