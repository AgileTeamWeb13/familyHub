<?php
//If form isset
if (isset($_POST["form_submit"])){
    //If Email is left blank - do not send
    if(empty($_POST["strEmail"]) ){
        header("location: ../hub.php?error=true");
    }
    else{
        //Send to
        $to = $_POST["strEmail"];
        //Subject
        $subject = $_POST["strUserName"] . " invited you to join a family hub!";
        //Message
        $message = "
            <html>
                <head>
                    <title>Hub Invite</title>
                </head>
                <body>
                    <img src='http://ashleyspires.ca/hub/banner.png' alt='banner' width='600px;'/>
                    <h1>" . $_POST["strUserName"] . "invited you to join a family hub! - " . $_POST["strHubName"] . "</h1>
                    <p>Click the link below to register at kinship and connect with your family members:</p>
                    <p>http://familyhub.ca/register</p>
                </body>
            </html>
            ";

        // Content-type
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        //From
        $headers .= 'From: <invite@familyhub.com>' . "\r\n";
        //Send Mail
        mail($to,$subject,$message,$headers);
        //Return
        header("location: ../hub.php");
    }
}
//Error
else{
    header("location: ../hub.php?error=true");
}
?>
