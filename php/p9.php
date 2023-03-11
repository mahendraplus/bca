<html>

<head>
    <title>P9</title>
</head>

<body>
    <?php
    function matricmultiply($n, $p, $q)
    {
        $r = array();
        for ($i = 0; $i < $n; $i++) {
            $t[] = 0;
        }
        $r[] = $t;
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $t = 0;
                for ($k = 0; $k < $n; $k++)
                    $t += $p[$i][$k] * $q[$k][$j];
            }
            $r[$i][$j] = $t;
        }
        return $r;
    }
    function echomatric($n, $r)
    {
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($j == $n)
                    echo "<br>";
                else
                    echo $r[$i][$j];
                if ($j < ($n - 1))
                    echo ",";
            }
        }
    }
    $p = array();
    $p[] = array(1, 3, 4);
    $p[] = array(1, 1, 2);
    $p[] = array(1, 2, 5);
    $q = array();
    $q[] = array(8, 3, 1);
    $q[] = array(3, 10, 2);
    $q[] = array(1, 2, 6);
    echo "matric1<br/>";
    echomatric(3, $p);
    echo "<br/>";
    echo "matric2<br/>";
    echomatric(3, $q);
    echo "<br/>";
    $r = matricmultiply(3, $p, $q);
    echo "result is<br/>";
    echomatric(3, $r);
    ?>
</body>

</html>