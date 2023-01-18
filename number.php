<!-- Program 14 -->

<!DOCTYPE html>
<html>
    <head>
        <title>Number</title>
    </head>
    <body>
        <form method="POST">
            <label for="number">Enter a number: </label>
            <input type="text" id="number" name="number">
            <button type="submit">Find</button>
        </form>
        <?php
        if($_POST){
            $number = $_POST["number"];
            $sum = 0;

            for($i = 1;$i < $number;$i++){
                if($number % $i == 0){
                    $sum = $sum + $i;
                }
            }

                if($sum == $number){
                    echo("The number is perfect");
                }else if($sum > $number){
                    echo("The number is abundant");
                }else{
                    echo("The number is deficient");
                }
            }
        ?>
    </body>
</html>