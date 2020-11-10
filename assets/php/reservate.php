<?php


if (isset($_REQUEST['recaptcha_response'])) {

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LelkeAZAAAAAMfBPXc3fsjrJ46GD5FRCthmFhcI';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    echo $recaptcha;
    $recaptcha = json_decode($recaptcha);


    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {
        if (isset($_REQUEST['name']) && isset($_REQUEST['curs']) && isset($_REQUEST['email']) && isset($_REQUEST['message'])) {

            $email_to = "milicam@biznisinkubator.rs";
            $email_subject = "Rezervisanje prekvalifikacija (Sajt)";

            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $message = $_REQUEST['message'];
            $curs = $_REQUEST['curs'];


            function clean_string($string)
            {
                $bad = array("content-type", "bcc:", "to:", "cc:", "href");
                return str_replace($bad, "", $string);
            }

            $email_message = "Ime: " . clean_string($name) . "\n";
            $email_message .= "Email: " . clean_string($email) . "\n";
            $email_message .= "Prekvalifikacija: " . clean_string($curs) . "\n";
            $email_message .= "Message: " . clean_string($message) . "\n";


            $headers = 'From: ' . $email . "\r\n" .
                'Reply-To: ' . $email . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            if (@mail($email_to, $email_subject, $email_message, $headers)) {
                echo 'success';
            } else {
                echo 'error with sending mail';
            };
        }else
        {
            echo "nije sve setovanoi";
        }
    } else {
        echo "error with recaptcha";
    }

} else {
    echo "error with recaptcha_response";
}
