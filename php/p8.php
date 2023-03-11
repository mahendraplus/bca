<html>

<head>
    <title>p8.php</title>
</head>

<body>
    <form method="POST" action="<?php
    $_SERVER['PHP_SELF']; ?>">
        <h1>
            <align="center".<u>Student Mark
                Sheet</u>
        </h1></br><br>
        Subject 1&nbsp;&nbsp;&nbsp;<input type="text" name="s1" <br /><br />
        Subject 2&nbsp;&nbsp;&nbsp;<input type="text" name="s2" <br /><br />
        <input type="submit" name="submit" value="sub
mit"><br /><br />
        <?php
        $x = $_POST['s1'];
        $y = $_POST['s2'];
        $total = $x + $y;
        $per = $total / 2;
        $p = $per / 10;
        echo "Total:" . $total . "<br/></br>";
        echo "Percentage:" . $per . "<br/><br/>";
        switch ($p) {
            case $p >= 7:
                echo "<br>Grade:A";
                break;
            case $p >= 6:
                echo "Grade:B";
                break;
            case $p >= 5:
                echo "Grade:c";
                break;
            case $p >= 4:
                echo "Pass";
                break;
            case $p >= 3:
                echo "Fail";
                break;
            default:
                echo "EnterMarks";
        }
        ?>
</body>

</html>