<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello, PHP!</title>
  </head>
  <body>
    <?php echo "Hello, PHP!" ?> </br>
    <?php echo "Hello," . " PHP!" ?> </br>
    <?php echo 2+3 . " "; 
          //  echo 2+3 . " ";
          echo 3+3 . ""; 
          /*
          echo 3+3 . " "; 
          echo 3+3 . " "; 
          */
             ?>
             </br>
    <?php
    echo "Hello, World!<br />";
    $x = "Hello";
    $y =  "World";
    $z = 22;

    
    echo $x . " " . $y ."!<br />";
    echo "$z Again <br />";
    echo '$z Again <br />';
    echo "{$z} Again <br />";
    ?>
    <br />    <br />
  
     <?php
    $first = "I am";
    $second = " what I am";

    $third = $first;
    $third .= $second;
    echo $third;
    ?>
<br /><br />

    Lowercase: <?php echo strtolower($third) ?><br />       
    Uppercase: <?php echo strtoupper($third) ?><br />
    Uppercase first: <?php echo ucfirst($third) ?><br />   
    Uppercase words : <?php echo ucwords($third) ?><br />
 
    <br /><br />

    Length:  <?php echo strlen($third) ?><br /> 
    Trim:  <?php echo "A" . trim(" B C D ") . "E" ?><br /> 
    Find:  <?php echo strstr($third, "am") ?><br /> 
    Replace by string: <?php echo str_replace("am", "was", $third) ?><br /> 

    <br /><br />

    Repeat:  <?php echo str_repeat($third, 5) ?><br /> 
    Make substring: <?php echo substr($third, 7,11) ?><br /> 
    Find position:  <?php echo strpos($third, "am") ?><br /> 
    Find character:  <?php echo strchr($third, "w") ?><br /> 

  </body>
</html>
