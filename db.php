<!-- Program 19 -->

<!DOCTYPE html>
<html>
    <head>
        <title>Stock Details</title>
    </head>
    <body>
        <center>
            <form method="post" id="form">
                <h1>Stock Details</h1>
                <table>
                    <tr>
                        <td><label for="itemCode" id="thing">Item code: </label></td>
                        <td><input type="text" name="itemCode" id="itemCode"></td>
                    </tr>
                    <tr>
                        <td><label for="itemName">Item Name: </label></td>
                        <td><input type="text" name="itemName" id="itemName"></td>
                    </tr>
                    <tr>
                        <td><label for="price">Price: </label></td>
                        <td><input type="text" name="price" id="price"></td>
                    </tr>
                    <tr>
                    <td><button type="submit">Submit</button></td> 
                    </tr>
                </table>
            </form>
        <?php
    if($_POST){
        $itemCode= $_POST["itemCode"];
        $itemName = $_POST["itemName"];
        $itemPrice = $_POST["price"];

        $db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=root");
        $query = "INSERT INTO product VALUES($itemCode, '$itemName', $itemPrice);";
        $res = pg_query($db, $query);
        if($res){
            echo("$itemName with $itemCode added to DB");
        }else{
            echo("Cannot insert");
            exit(0);
        }

        $sql="SELECT * from product";
        $res = pg_query($db, $sql);
        echo("
            <table border='1'>
                <tr>
                    <td>Item code</td>
                    <td>Item name</td>
                    <td>Item price</td>
                </tr>
        ");
        while($row = pg_fetch_row($res)){
            echo("
                    <tr>
                        <td>$row[0]</td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                    </tr>
            ");
        }
        echo("</table>");
        echo("
            </center>
        </body>
    </html>
    ");
    }
    ?>        
    </body>
</html>