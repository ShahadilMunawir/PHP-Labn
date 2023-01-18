<!-- Program 13 -->

<!DOCTYPE html>
<html>
    <head>
        <title>String Reverse</title>
    </head>
    <body>
        <form method="POST">
            <label for="string">Enter a String: </label>
            <input type="text" id="string" name="string">
            <button type="submit">Reverse String</button>
        </form>
    </body>
    <?php
        if($_POST){
            $string = $_POST["string"];
            echo "</br>String: " . $string . "</br>";
            function reverse($str){
                $len = strlen($str);
                for($i = 0; $i<$len/2; $i++){
                    $temp = $str[$i];  
                    $str[$i] = $str[$len - 1 -$i];  
                    $str[$len - 1 - $i] = $temp;  
                }
                return $str;
            }            
            echo "Reverse: " . reverse($string);
        }
    ?>
</html>