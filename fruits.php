<!-- Program 21 -->

<!DOCTYPE html>
<html>
    <head>
        <title>Fruits</title>
    </head>
    <body>
        <form method="POST">
            <label for="fruits">Select a Fruit: </label>
            <select name="fruits" id="fruits">
                <option selected disabled></option>
                <option value="Apple">Apple</option>
                <option value="Orange">Orange</option>
                <option value="Pappaya">Pappaya</option>
                <option value="Mango">Mango</option>
                <option value="Pineapple">Pineapple</option>
            </select>
            <button type="submit">Select Fruit</button>
        </form>
        <?php
            if($_POST){
                $fruit = $_POST["fruits"];
                echo($fruit . " is the selected fruit");
            }
        ?>
    </body>
</html>