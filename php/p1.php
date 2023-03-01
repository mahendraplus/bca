<?php
date_default_timezone_set("Asia/Calcutta");
$date = date("d M Y")."<br>".date("h:i:s A");
$speed = date("s"); 
?>

<html>
    <head>
 
    <title>BCA PHP Program</title>
<style>
    *{
        color:#00ff00;
    }
    </style>
</head>
<body bgcolor="black">
    
<marquee behavior="alternate" scrollamount="<?php echo $speed ?>">
    
<h1>
MaX Live Server <br>    
<?php echo $date ?>
<br>

</h1>
</marquee>

</body>
</html>
