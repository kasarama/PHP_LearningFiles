<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers in PHP</title>
</head>
<body>
    <h2>Numbers in PHP</h2><br/>
    <h3>Integers</h3>

    <?php

    $x = 3;
    $y = 4;

    ?>
    x = 3 <br/>y = 4<br/>
    Basic Math : <br/>
    ((1 + 2 + x) * y) / 2 - 5 = <?php echo ((1 + 2 + $x) * $y) / 2 - 5  ?>
    <br/>
    <br/>
    Absolute value:   <?php echo abs(0 - 300);   ?>  abs(0 - 300)<br />
    Exponential:       <?php echo pow(2,8);      ?>  pow(2,8)<br />
    Square root:       <?php echo sqrt(100);     ?>  sqrt(100)<br />
    Modulo:           <?php echo fmod(20,7);     ?> fmod(20,7)<br />
    Random:           <?php echo rand();         ?> <br />
    Random (min,max): <?php echo rand(1,10);     ?> rand(1,10)<br />
    <br/>
    <br/>
    y += 4 = <?php $y += 4; echo $y; ?><br />
    y -= 4 = <?php $y -= 4; echo $y; ?><br />
    y *= 3 = <?php $y *= 3; echo $y; ?><br />
    y /= 4 = <?php $y /= 4; echo $y; ?><br />
    <br />
    Increment y++: <?php $y++; echo $y; ?><br />
    Decrement y--: <?php $y--; echo $y; ?><br />
    <br />
    <br />
    <?php
      // PHP will convert a string to an integer
      // but it is sloppy programming
    //  echo 1 + "2 houses";
    ?>

<h3>Floats</h3>
<br/>

<br/>

 a =   <?php echo $a = 3.14; ?><br />
 <br />
 a + 7 =   <?php echo $a + 7; ?><br />
 4 / 3 =   <?php echo 4/3; ?><br />

    <?php //echo 4/0; ?><br />
    <br />
   
    Round a:     <?php echo round($a, 1);   ?><br />
    Ceiling of a:   <?php echo ceil($a);       ?><br />
    Floor of a:     <?php echo floor($a);     ?><br />
    <br />
    
    <?php $integer = 3; ?>
    
    <?php echo "Is {$integer} integer? " . is_int($integer); ?><br />
    <?php echo "Is {$a} integer? " . is_int($a); ?><br />
    <br />
    <?php echo "Is {$integer} float? " . is_float($integer); ?><br />
    <?php echo "Is {$a} float? " . is_float($a); ?><br />
    <br />
    <?php echo "Is {$integer} numeric? " . is_numeric($integer); ?><br />
    <?php echo "Is {$a} numeric? " . is_numeric($a); ?><br />
    <br />
</body>
</html>