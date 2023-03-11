<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-
1" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    $h = fopen("file.txt", "w");
    $text = "Hello\tstudents....\n welcome\t 
to\tPHP...";
    if (fwrite($h, $text) == false) {
        echo "file is written";
    } else {
        echo "file is not written";
    }
    echo "<br><br>";
    $get = file_get_contents("file.txt");
    echo "file contents are:$get";
    echo "<br><br>";
    $data = file('file.txt');
    foreach ($data as $number => $line) {
        echo "line $number:$line<br>";
    }
    $op = 'file.txt';
    $cp = 'copy.txt';
    if (copy($op, $cp)) {
        echo "<br/>";
        echo "$op file is copied in $cp.<br>";
    } else {
        echo "<br/>";
        echo "$op is not copied in $cp.";
    }
    if (unlink("copy.txt")) {
        echo "<br/>";
        echo "$cp file is deleted";
    } else {
        echo "<br/>";
        echo "$cp file is not deleted";
    }
    ?>
</body>

</html>