<!-- Program 16 -->

<!DOCTYPE html>
<html>
    <head>
        <title>Student Table</title>
    </head>
    <body>
        <form method="POST">
            <label for="regNumber">Roll No: </label>
            <input type="text" name="regNumber" id="regNumber">
            <button type="submit">Search</button>
        </form>
        <?php
            if($_POST){
                $regNum = $_POST["regNumber"];
                $db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=root");

                $query = "SELECT * from student where regNo='$regNum'";

                $result = pg_query($db, $query);
                $rowsCount = count(pg_fetch_all($result));
                if($rowsCount != 0){
                    echo("<h1>Mark Sheet</h1>");
                    while($row = pg_fetch_row($result)){
                        echo("
                            Register No.: $row[0]
                            <br>
                            Name: $row[1]
                            <br>
                            Mark: $row[2]
                            <br>
                            Grade: $row[3]
                        ");
                    }
                }else{
                    echo("Student not found!");
                }
            }
        ?>
    </body>
</html>