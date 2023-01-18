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
    }
?>