<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>

    <h3>While Loop </h3>

    <?php
    $count = 0;
    while ($count <= 10) {
        if ($count == 5) {
            echo "FIVE, ";
        } else {
            echo $count . ", ";
        }
        $count++; // increment by 1
    }
    echo "<br />";
    echo "Count: {$count}";
    ?>

    <br />
    <br />
    <?php // On your own exercise
    
    $count = 1;
    while ($count < 11) {
        if ($count % 2 == 0) {
            echo "{$count} is even<br />";
        } else {
            echo "{$count} is odd<br />";
        }
        $count++;
    }

    ?>
    <br />

    <h3> For loops </h3>

    <?php // while loop example
    echo "Using while loop:  ";
    $count = 0;
    while ($count <= 10) {
        echo $count . ", ";
        $count++;
    }
    ?>
    <br />
    <?php
    echo "Using for loop:  ";
    for ($count = 0; $count <= 10; $count++) {
        echo $count . ", ";
    }

    ?>

    <br />
    <br />
    <?php

    for ($count = 11; $count > 0; $count--) {
        if ($count % 2 == 0) {
            echo "{$count} is even.<br />";
        } else {
            echo "{$count} is odd.<br />";
        }
    }

    ?>


    <h3> Foreach loops </h3>

    <?php
    $ages = array(4, 8, 15, 16, 23, 42);

    foreach ($ages as $age) {
        echo "Age: {$age}<br />";
    }
    ?>

    <br />

    <?php // foreach using assoc. array
    
    $person = array(
        "first_name" => "Kevin",
        "last_name" => "Skoglund",
        "address" => "123 Main Street",
        "city" => "Beverly Hills",
        "state" => "CA",
        "zip_code" => "90210"
    );

    foreach ($person as $attribute => $data) {
        $attr_nice = ucwords(str_replace("_", " ", $attribute));
        echo "{$attr_nice}: {$data}<br />";
    }
    ?>

    <br />

    <?php
    $prices = array(
        "Brand New Computer" => 2000,
        "1 month of Lynda.com" => 25,
        "Learning PHP" => null
    );

    foreach ($prices as $item => $price) {
        echo "{$item}: ";
        if (is_int($price)) {
            echo "$" . $price;
        } else {
            echo "priceless";
        }
        echo "<br />";
    }
    ?>

    <h3> Continue</h3>

    <?php
    for ($count = 0; $count <= 10; $count++) {
        if ($count % 2 == 0) {
            continue;
        }
        echo $count . ", ";
    }
    ?>

    <br />
    <br />
    <?php // what's wrong with this?
    echo "Without count++: <br />";
    $count = 0;
    while ($count <= 10) {
        if ($count == 5) {
            $count++;
            continue;
        }
        echo $count . ", ";
        $count++;
    }

    ?>

    <br />
    <?php // Fixed?
    echo "<br /> With count++: <br />";

    $count = 0;
    while ($count <= 10) {
        if ($count == 5) {
            $count++;
            continue;
        }
        echo $count . ", ";
        $count++;
    }

    ?>

    <br />
    <br />





    <br />
    <br />
    <?php // loop inside a loop with continue
    
    for ($i = 0; $i <= 5; $i++) {
        if ($i % 2 == 0) {
            continue;
        }
        for ($k = 0; $k <= 5; $k++) {

            echo $i . "-" . $k . "<br />";
        }
    }
    ?>
    <br />
    <br />

    <?php // loop inside a loop with continue
    
    for ($i = 0; $i <= 5; $i++) {
        if ($i % 2 == 0) {
            continue(1);
        }
        for ($k = 0; $k <= 5; $k++) {
            if ($k == 3) {
                continue(1);
            }
            echo $i . "-" . $k . "<br />";
        }
    }

    ?>
    <br />
    <br />

    <?php // loop inside a loop with levels of continue
    
    for ($i = 0; $i <= 5; $i++) {
        if ($i % 2 == 0) {
            continue(1);
        }
        for ($k = 0; $k <= 5; $k++) {
            if ($k == 3) {
                continue(2);
            }
            echo $i . "-" . $k . "<br />";
        }
    }

    ?>
    <br />

    <h3> Break </h3>

    <?php
    for ($count = 0; $count <= 10; $count++) {
        if ($count == 5) {
            break;
        }
        echo $count . ", ";
    }
    ?>

    <br /> <br /> <br />
    <?php // loop inside a loop with break
    
    for ($i = 0; $i <= 5; $i++) {
        if ($i % 2 == 0) {
            continue(1);
        }
        for ($k = 0; $k <= 5; $k++) {
            if ($k == 3) {
                break(2);
            }
            echo $i . "-" . $k . "<br />";
        }
    }

    ?>

</body>

</html>