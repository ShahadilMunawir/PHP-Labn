<!DOCTYPE html>
<html>
    <body>
        <h2>Array Operations</h2>
        <form method="post">
            <input type=radio name="option" value=display>Display Array<br>
            <input type=radio name="option" value=sort>Sorted Array<br>
            <input type=radio name="option" value=duplicate>Without Duplicate<br>
            <input type=radio name="option" value=pop>Delete Last<br>
            <input type=radio name="option" value=reverse>Array Reverse<br>
            <input type=radio name="option" value=search>Array Search<br>
            <input type="submit" value="submit"><br>
    </body>
</html>
<?php
$names = array(
    "Sundar Pichai",
    "Satya Nadella",
    "Linus Torvalds",
    "Bill Gates",
    "Jeff Bezos",
    "Steve Jobs",
    "Elon Musk",
    "Susan Wojcicki",
    "Tom Cruise",
    "Keanu Reeves",
    "Matt Damon"
);
if($_POST) {
    $val = $_POST["option"];
    switch ($val) {
        case "display":
            echo "<h2>Display Array</h2>";
            foreach ($names as $value)
                echo "<br>" . $value;
            break;
        case "sort":
            echo "<h2>Sorted Array</h2>";
            sort($names);
            foreach ($names as $value)
                echo "<br>" . $value;
            break;
        case "duplicate":
            echo "<h2>List unique Array elements</h2>";
            $uarray = array_unique($names);
            foreach ($uarray as $value)
                echo "<br>" . $value;
            break;
        case "pop":
            echo "<h2>Delete last element</h2>";
            array_pop($names);
            foreach ($names as $value)
                echo "<br>" . $value;
            break;
        case "reverse":
            echo "<h2>Reverse Array</h2>";
            $revarr = array_reverse($names);
            foreach ($revarr as $value)
                echo "<br>" . $value;
            break;
        case "search":
            echo "<h2>Search Array element</h2>";
            echo "<br>Element found at index" . array_search("John", $names, true);
            break;
    }
}
?>