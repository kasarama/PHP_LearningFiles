<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Logical</title>
  </head>
  <body>

  <h3> if, else and elseif statement </h3>
  $a = 3; <br/>      
  $b = 4;<br/>
  <br/>
    <?php
      $a = 3;
      $b = 4;
      
      if ($a > $b) {
        echo "a is larger than b";
      } elseif ($a < $b) {
        echo "a is smaller than b";
      } else {
        echo "a is equal to b";
      }

    
    ?>
    <br />
    <?php // Only welcome new users
      $new_user = true;
      if ($new_user) {
        echo "<h5>Welcome!</h5>";
        echo "<p>We are glad you decided to join us.</p>";
      }
    ?>
    <br />
    
    <?php // don't divide by zero
      $numerator = 20;
      $denominator = 10;
      $result = 0;
      if ($denominator > 0) {
        $result = $numerator / $denominator;
      }
      echo "Result: {$result}";
    ?>
    <br/><br/><br/>
    
    <h3> Comparison Operators </h3>
    Equal: ==<br/>
    Identical: ===<br/>
    Compare: < , > , <= , >= , <><br/>
    Not Equal: !=<br/>
    Not identical: !==<br/>

        
    <h3> Logical Operators </h3>
    And: && <br/>
    Or: || <br/>    
    Not : ! <br/>
  
    <br/>
    <?php
      $a = 4;
      $b = 3;
      $c = 1;
      $d = 20;
      if (($a >= $b) || ($c >= $d)) {
        echo "a is larger than b OR ";
        echo "c is larger than d";
      }
    ?>
    <br />
    <?php
      $e = 100;
      if (!isset($e)) {
        $e = 200;
      }
      echo $e;
    ?>
    <br />
    <?php
      // don't reject 0 or 0.0
      $quantity = "";
      if (empty($quantity) && !is_numeric($quantity)) {
        echo "You must enter a quantity.";
      }
    ?><br/>

        
    <h3> Switch statements </h3>


    <?php
      $a = 1;
      
      switch ($a) {
        case 0:
          echo "a equals 0<br />";
          break;
        case 1:
          echo "a equals 1<br />";
          break;
        case 2:
          echo "a equals 2<br />";
          break;
        case 3:
          echo "a equals 3<br />";
          break;
        default:
          echo "a is not 0, 1, 2, or 3<br />";
          break;
      }
      
      switch ($a) {
        case 0:
          echo "a equals 0<br />";
          
        case 1:
          echo "a equals 1<br />";
          
        case 2:
          echo "a equals 2<br />";
          
        case 3:
          echo "a equals 3<br />";
          
        default:
          echo "a is not 0, 1, 2, or 3<br />";
     }
    ?>
    
    <?php
    // ChineseZodiac
    // whitespace doesn't matter
    // colons, semicolons and breaks do
    $year = 2023;
    switch (($year - 4) % 12) {
      case  0: $zodiac = 'Rat';     break;
      case  1: $zodiac = 'Ox';       break;
      case  2: $zodiac = 'Tiger';   break;
      case  3: $zodiac = 'Rabbit';   break;
      case  4: $zodiac = 'Dragon';   break;
      case  5: $zodiac = 'Snake';   break;
      case  6: $zodiac = 'Horse';   break;
      case  7: $zodiac = 'Goat';     break;
      case  8: $zodiac = 'Monkey';  break;
      case  9: $zodiac = 'Rooster'; break;
      case 10: $zodiac = 'Dog';     break;
      case 11: $zodiac = 'Pig';     break;
    }
    echo "{$year} is the year of the {$zodiac}.<br />";
    ?>
    
    <?php // case with multiple values

      $user_type = 'mama';
      
      switch ($user_type) {
        case 'student':
          echo "Welcome!";
          break;
        case 'press':
        case 'customer':
        case 'admin':
          echo "Hello!";
          break;
        default :
        echo "Unknown";
        break;
      }
    ?>
    


  </body>
</html>