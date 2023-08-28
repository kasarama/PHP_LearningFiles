<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>More Types</title>
  </head>
  <body>

  <h2> Boolean </h2>
    <?php
      $result1 = true;
      $result2 = false;
    ?>
    Result1: <?php echo $result1; ?><br />
    Result2: <?php echo $result2; ?><br />
    
    result2 is boolean? <?php echo is_bool($result2); ?>
    <br />
    
    <?php
      $number = 3.14;
      if( is_float($number) ) {
        echo "It is a float.";
      }
    
    ?>


<br/>
<br/>
<h2> Null and empty </h2>


<?php
      $var1 = null;
      $var2 = "";
    ?>
    var1 null? <?php echo is_null($var1); ?><br />
    var2 null? <?php echo is_null($var2); ?><br />
    var3 null? <?php echo is_null($var3); ?><br />
    <br />
    var1 is set? <?php echo isset($var1); ?><br />
    var2 is set? <?php echo isset($var2); ?><br />
    var3 is set? <?php echo isset($var3); ?><br />
    <br />
    
    <?php // empty: "", null, 0, 0.0, "0", false, array() ?>
    
    <?php $var3 = "0"; ?>
    var1 empty? <?php echo empty($var1); ?><br />
    var2 empty? <?php echo empty($var2); ?><br />
    var3 empty? <?php echo empty($var3); ?><br />


    
<br/>
<br/>
<h2> Types  </h2>

<h3> Type Juggling </h3>


    <?php $count = "2  "; ?>
    Type: <?php echo gettype($count); ?><br />
    
    <?php $count += 3; ?>
    Type: <?php echo gettype($count); ?><br />

    <?php $cats = "I have " . $count . " cats."; ?>
    Cats: <?php echo gettype($cats); ?><br />
    <br />
    
    <h3>   Type Casting </h3>
    <?php settype($count, "integer"); ?>
    count: <?php echo gettype($count); ?><br />
    
    <?php $count2 = (string) $count; ?>
    count: <?php echo gettype($count); ?><br />
    count2: <?php echo gettype($count2); ?><br />
    <br />
    
    <?php $test1 = 3; ?>
    <?php $test2 = 3; ?>
    <?php settype($test1, "string"); ?>
    <?php (string) $test2; ?>
    test1: <?php echo gettype($test1); ?><br />
    test2: <?php echo gettype($test2); ?><br />



    <br />
    
    <h2> Constants  </h2>
    <?php
      $max_width = 9800;
      $max_width = 7877;
      define("MAX_WIDTH", 980);
      echo MAX_WIDTH . " " . $max_width;
    ?>
    <br />
    <?php // can't change the value
    //MAX_WIDTH = MAX_WIDTH + 1
    //echo MAX_WIDTH;
    ?>

    <?php // can't even redefine it
    define("MAX_WIDTH", 981);
    echo MAX_WIDTH;
    ?>

  </body>
</html>
