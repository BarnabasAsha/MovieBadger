<?php
$email = $_GET['email'];

if (isset($email)) {
    # code...

    $dbServerName = "db4free.net";
            $dbUserName = "notification";
            $dbPassword = "TechBee15";
            $dbName = "moviebadger";

            $conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
            $cmd = "INSERT INTO emaillist (email) value('$email');";
            mysqli_query($conn, $cmd);

            $file = './email_list.txt';
            $current = file_get_contents($file);

            $current .= "\r\n" .$email;

            file_put_contents($file, $current);

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        # code...
        echo 'Please Enter a valid email';
    } else {
        $from = "MovieBadger";
        $subject = "Notification Confirmation";
        $body = '
        <div style="width: 350px;  margin: auto; font-family: san-serif;">
        <div style="background: #ec405a; color: white; padding: 30px; text-align: center; height: 120px; font-family: sans-serif;">
        <h3 style="font-size: 14px; font-weight: bold; margin-bottom: 20px; color: white; text-align:left; ">Movie Badger</h3>
        <h2 style="font-size: 45px; font-style: italic; font-weight: 400; font-family: lucida sans; color: #1A2632; margin-top: 20px; text-align: center;">Thank you!</h2>
        </div>
        <p style="font-size: 22px; font-weight: 500; height: 200px; background: white; padding: 20px;">Hi there, <br><br>
              Thanks for your interest in moviebadger! <br><br>
            As promised you will be the first to know when the app is officially out. <br><br>
            The moviebadger team</p>
    </div>
        ';
        $headers = "MIME-Version: 1.0" ."\r\n";
        $headers .= "Content-Type:text/html" ."\r\n";
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