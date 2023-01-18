<!DOCTYPE html>
<html>
    <head>
        <title>Bank</title>
    </head>
    <body>
        <center>
            <h1>Bank</h1>
            <form method="POST">
                <label for="ac_no">Account No:</label>
                <input type="text" name="ac_no" id="ac_no">
                <label for="amount">Amount: </label>
                <input type="text" name="amount" id="amount">
                <br><br>
                <label for="deposit">Deposit: </label>
                <input type="radio" name="transaction_type" id="deposit" value="deposit">
                <label for="withdraw">Withdraw: </label>
                <input type="radio" name="transaction_type" id="withdraw" value="withdraw">
                <br><br>
                <button type="submit">Submit</button>
                <br><br>
            </form>
            <?php
                if($_POST){
                    $acNo = $_POST["ac_no"];
                    $amount = $_POST["amount"];
                    $transactionType = $_POST["transaction_type"];
                    $db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=root");
                    if($db){
                        if($transactionType == "deposit"){
                            $query = "SELECT * FROM bank WHERE acno=$acNo";
                            $result = pg_query($db, $query);
                            
                            while($row=pg_fetch_row($result)){
                                $newBalance = $row[2] + $amount;
                                $balDifference = (int) $newBalance - (int) $row[2];
                                echo("
                                    <table border=1>
                                        <tr>
                                            <th>Account No</th>
                                            <th>Balance</th>
                                            <th>New Balance</th>
                                            <th>Difference<th>
                                        </tr> 
                                        <tr>
                                            <td>$acNo</td>
                                            <td>$row[2]</td>
                                            <td>$newBalance</td>
                                            <td>$balDifference</td>
                                        </tr>
                                    </table>
                                ");
                            }
                        }else{
                            $query = "SELECT * FROM bank WHERE acno=$acNo";
                            $result = pg_query($db, $query);
                            
                            while($row=pg_fetch_row($result)){
                                $newBalance = $row[2] - $amount;
                                $balDifference = (int) $row[2] - (int) $newBalance;
                                echo("
                                    <table border=1>
                                        <tr>
                                            <th>Account No</th>
                                            <th>Balance</th>
                                            <th>New Balance</th>
                                            <th>Difference<th>
                                        </tr> 
                                        <tr>
                                            <td>$acNo</td>
                                            <td>$row[2]</td>
                                            <td>$newBalance</td>
                                            <td>$balDifference</td>
                                        </tr>
                                    </table>
                                ");
                            }
                        }
                    }
                }
            ?>
        </center>
    </body>
</html>