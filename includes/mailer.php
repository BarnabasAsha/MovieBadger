<?php
$email = $_GET['email'];

if (isset($email)) {
    # code...

    $dbServerName = "https://www.db4free.net";
            $dbUserName = "notification";
            $dbPassword = "TechBee15";
            $dbName = "moviebadger";

            $conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
            $cmd = "INSERT INTO emaillist (email) value('$email');";
            
            if (mysqli_query($conn, $cmd)) {
                # code...
                echo 'saved';
            }else echo 'not saved';

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        # code...
        echo 'Please Enter a valid email';
    } else {
        $from = "MovieBadger";
        $subject = "Notification Confirmation";
        $body = '
        <div class="container" style="background: linear-gradient(81.7deg, #1A2632 35.21%, #F0324F 116.87%); color: white; padding: 30px; text-align: center; width: 280px; height: 200px; margin: auto; font-family: sans-serif;">
        <h3 style="font-size: 14px; font-weight: bold; margin-bottom: 20px;">Movie Badger</h3>
        <h1 style="font-size: 30px; font-weight: bold;">Thank you!</h1>
        <p style="font-size: 16px;">We would contact you when we launch</p>
    </div>
        ';
        $headers = "MIME-Version: 1.0" ."\r\n";
        $headers .= "Content-Type:text/html" ."\r\n";
        $headers .= "charset=UTF-8" ."\r\n";
        $headers .= "From: " .$from ."\r\n";
        $send = mail($email,$subject,$body,$headers);
        if ($send == true) {
            # code...
            echo 'Thank you, You will be notified';
        } else {
            echo 'Please Try Again';
        }

            
    }
}


?>