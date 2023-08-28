<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions </title>
</head>

<body>
    <h3>Defining function </h3>

    <?php


    say_hello_to("MAGDA");

    function say_hello_to($name)
    {
        echo "Hello, " . ucwords(strtolower($name)) . "!" . "<br />";
    }
    say_hello_to("Ola");


    function greet_someone($greeting, $target, $pnct)
    {
        echo $greeting . ", " . ucwords(strtolower($target)) . $pnct . "<br />";
    }
    greet_someone("Czesc", "HaNia", ".");


    ?>
    <br />
    <br />

    <h3>Return values </h3>

    <?php

    function add($val1, $val2)
    {
        $sum = $val1 + $val2;
        return $sum;
    }

    $result1 = add(3, 4);
    $result2 = add(5, $result1);
    echo $result2;

    ?>
    <br />
    <br />
    <?php // Chinese Zodiac as a function
    
    function chinese_zodiac($year)
    {
        switch (($year - 4) % 12) {
            case 0:
                return 'Rat';
            case 1:
                return 'Ox';
            case 2:
                return 'Tiger';
            case 3:
                return 'Rabbit';
            case 4:
                return 'Dragon';
            case 5:
                return 'Snake';
            case 6:
                return 'Horse';
            case 7:
                return 'Goat';
            case 8:
                return 'Monkey';
            case 9:
                return 'Rooster';
            case 10:
                return 'Dog';
            case 11:
                return 'Pig';
        }
    }

    $zodiac = chinese_zodiac(2013);
    echo "2013 is the year of the {$zodiac}.<br />";

    echo "2027 is the year of the " . chinese_zodiac(2027) . ".<br />";

    ?>
    <br />
    <br />
    <?php

    function better_hello($greeting, $target, $punct)
    {
        return $greeting . " " . $target . $punct . "<br />";
    }

    echo better_hello("Hello", "John Doe", "!");

    ?>
    <br />
    <br />

    <h3>Multiple return values </h3>

    <?php

    function add_subt($val1, $val2)
    {
        $add = $val1 + $val2;
        $subt = $val1 - $val2;
        return array($add, $subt);
    }

    $result_array = add_subt(10, 5);
    echo "Add: " . $result_array[0] . "<br />";
    echo "Subt: " . $result_array[1] . "<br />";

    list($add_result, $subt_result) = add_subt(20, 7);
    echo "Add: " . $add_result . "<br />";
    echo "Subt: " . $subt_result . "<br />";

    ?>

    <br />
    <br />

    <h3>Scope and global variables </h3>

    <?php

    $bar = "outside"; // global scope
    function dop()
    {
        $bar = "inside"; // local scope
    }
    function foo()
    {
        global $bar;
        if (isset($bar)) {
            echo "foo: " . $bar . "<br />";
        }
        $bar = "inside"; // local scope
    }

    echo "0: " . $bar . "<br />";
    dop();
    echo "1: " . $bar . "<br />";
    foo();
    echo "2: " . $bar . "<br />";

    ?>

    <br />
    <h3>Default argument variables </h3>

    <?php

    function paint($room = "office", $color = "red")
    {
        return "The color of the {$room} is {$color}.<br />";
    }

    echo paint();
    echo paint("bedroom", "blue");
    echo paint("bedroom", null);
    echo paint("bedroom");
    echo paint("blue");

    echo '(This is wrong argument assignment: paint($color = "pink", $room = "basement")  )';
    echo paint($color = "pink", $room = "basement");

    ?>

    <br />
    <br />
    <br />

    <?php
    echo "<br />";
    echo error_reporting();
    echo "<br />";
    echo error_reporting(E_ALL & E_STRICT);
    echo "<br />";
    echo error_reporting();
    echo "<br />";
    ?>
</body>

</html>