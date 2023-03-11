<html>

<head>
    <title>send mail</title>
</head>

<body>
    <?php
    $msg = "name:" . $_POST['name'] . "\n";
    $msg = "email:" . $_POST['email'] . "\n";
    $msg = "message:" . $_POST['message'] . "\n"
    ;
    $to = "s@ymail.com";
    $mailheaders = "from:my 
website<s@ymail.com>";
    $mailheaders = "reply_to:" . $POST['email'];
    mail($to, $subject, $msg, $mailheaders);
    ?>
    
</body>
<html>