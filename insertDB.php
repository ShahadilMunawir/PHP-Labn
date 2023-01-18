<!-- Program 19 -->

<!DOCTYPE html>
<html>
    <head>
        <title>Insert into DB</title>
    </head>
    <body>
        <form method="post">
            <label for="btn">Click to insert data into database: </label>
            <button type="submit" name="btn">Insert</button>
        </form>
        <?php
            if($_POST){
                $db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=root");
                echo("Connected to DB");
                $sql = <<< EOF
                    INSERT INTO product values('LT121', 'Laptop', 65000);

                    INSERT INTO product values('NB100', 'Notebook', 50);

                    INSERT INTO product values('PN001', 'Pen', 10);

                    INSERT INTO product values('PR102', 'Printer', 30000);

                    INSERT INTO product values('MN250', 'Monitor', 40000);
                    EOF;

                echo("Dumbed Data");
            }
        ?>
    </body>
</html>