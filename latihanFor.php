<?php
    for($a=1;$a<=10;$a++){
        echo $a;
    }
    
    echo "<br><br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <Select name="">
        <!-- <?php
            for ($i=1900; $i <= 2021; $i++) {
                echo "<option value=$i>$i</option>";
            }
        ?> -->

        <!-- cara lain  -->
        <?php
            for ($i=1900; $i <= 2021 ; $i++) { 
        ?> 
            <option value="<?=$i;?>" 
                <?php if ($i==1983) {echo"selected";}
                ?>> <?=$i;?>
            </option> 
                <?php 
                    } 
                ?>       
    </Select> <br><br>

    <?php
        $jumlah1 = $_POST["jumlah1"];
        for($a=1; $a<=$jumlah1; $a++) {
            for($i=1; $i<=$a; $i++) {
                echo "*";
            }
            echo"<br>";
        }
    ?> <br>

    <!-- <?php
        for($a=1; $a<=6; $a++) {
            for ($i=1; $i<=$a; $i++) {
                if($a==3) {
                    if($i != 2) {
                        echo $a;
                    }else{
                        echo "x";
                    }
                }else{
                    echo $a ;
                }
            } 
            echo "<br>";
        } 
    ?> -->

    <!-- cara lain -->
    <?php
        for($a=1; $a<=5; $a++) {
            for($b=1; $b<=$a; $b++) {
                if($a==3 && $b==2) {
                    echo "x";
                }else{
                    echo $a;
                }
            }
            echo "<br>";
        }
    ?>
    
</body>
</html>