<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Untitled Document</title>
</head>

<body>
    <?php

    function read_dir_content($parent_dir, $depth = 0)
    {
        $str_result = "";
        $str_result . "<li>" . dirname($parent_dir) . "</li>";
        $str_result .= "<ul>";
        if ($handle = opendir($parent_dir)) {
            while (false !== ($file = readdir($handle))) {
                if (in_array($file, array('.', '..')))
                    continue;
                if (is_dir($parent_dir . "/" . $file)) {
                    $str_result .= "<li>" . read_dir_content($parent_dir . "/" . $file, $depth++) . "</li>";
                }
                $str_result .= "<li>{$file}</li>";
            }
            closedir($handle);
        }
        $str_result .= "</ul>";
        return $str_result;
    }
    echo "<ul>" . read_dir_content("/var/www/php") . "</ul>";
    ?>
</body>

</html>