<?php
    $a = 1;
    while($a < 10) {
        echo $a;
        $a=$a+1;
    }

    echo"<br>";

    $b = 1;
    while($b < 10)
    {
        if($b != 5){
            echo"$b";
        }
        $b++;
    }

    echo"<br>";

    $c = 1;
    while($c < 10)
    {
        if($c != 5)
        {
            echo"$c";
        }
        $c += 2;
    }
?>