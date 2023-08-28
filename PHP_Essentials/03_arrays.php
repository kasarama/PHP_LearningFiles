<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Arrays</title>
  </head>
  <body>
  <h2>ARRAYS </h2>
  <?php    
    $numbers = array(4,8,15,16,23,42);
  ?>

  numbers = [4,8,15,16,23,42]
  <br />
  numbers[0] =  <?php echo $numbers[0]; ?>
 
 <br />
    
 mixed = array(6, "fox", "dog", array("x", "y", "z"))  <?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?><br />
 mixed[2] =  <?php echo $mixed[2]; ?><br /><br />
 mixed : <?php echo print_r($mixed); ?> <br/>
mixed pre :     <pre>
    <?php echo print_r($mixed); ?>
    </pre>

    <?php //echo $mixed[3]; ?><br />
    <?php //echo $mixed ?><br />
    
    mixed[3][1]:    <?php echo $mixed[3][1]; ?><br />
    
    mixed[2] = "cat" <?php $mixed[2] = "cat"; ?><br />
    mixed[4] = "mouse" <?php $mixed[4] = "mouse"; ?><br />
    mixed[] = "horse" <?php $mixed[] = "horse"; ?><br />
    mixed[] = "elephant" <?php $mixed[] = "elephant"; ?><br />
    
    mixed: 
    {
    <pre>
    <?php echo print_r($mixed); ?>
    </pre>    
    }<br/>

    array = [1,2,3] <br/>
    <?php 
      //PHP 5.4 added the short array syntax.
      $array = [1,2,3];
   echo print_r($array); ?>
    

    <h2>ASSOCIATIVE ARRAYS </h2>
    <br />
    <?php $assoc = array("first_name" => "Kevin", "last_name" => "Skoglund"); ?>
    <?php echo $assoc["first_name"]; ?><br />
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <?php $assoc["first_name"] = "Larry"; ?>
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <?php // echo $assoc[0]; ?><br />

    <?php $numbers = array(4,8,15,16,23,42); ?>
    <?php $numbers = array(0 => 4, 1 => 8, 2 => 15, 3 => 16, 4 => 23, 5 => 42); ?>
    <?php echo $numbers[0]; ?>
    
   <h2>ARRAY FUNCTIONS </h2>
    <br />

    <?php $numbers = array(8,23,15,42,16,4); ?>
    
    Count:         <?php echo count($numbers); ?><br />
    Max value:     <?php echo max($numbers);   ?><br />
    Min value:     <?php echo min($numbers);   ?><br />
    <br />
    <pre>
    Sort:          <?php sort($numbers);  print_r($numbers); ?><br />
    Reverse sort: <?php rsort($numbers); print_r($numbers); ?><br />
    </pre>
    <br />
    Implode:       <?php echo $num_string = implode(" * ", $numbers); ?><br />
    Explode:       <?php print_r(explode(" * ", $num_string)); ?><br />
    <br />
    
    15 in array?: <?php echo in_array(15, $numbers); // returns T/F ?><br />
    19 in array?: <?php echo in_array(19, $numbers); // returns T/F ?><br />
    

  </body>
</html>
