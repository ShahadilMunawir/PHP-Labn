<!-- Program 15 -->
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method="post">
            <label for="username">Username: </label>
            <input type="text" name="username" id="username">
            <label for="password">Password: </label>
            <input type="text" name="password" id="password">
            <button type="submit">Submit</button>
        </form>
        <?php
            if($_POST){
                $username = $_POST["username"];
                $password = $_POST["password"];

                $db = pg_connect("host=localhost port=5432 dbname=login user=postgres password=root");

                $query = "SELECT username, password FROM loginCredentials WHERE username='$username' AND password='$password'";
                $result = pg_query($db, $query);
                $rows = pg_num_rows($result);

                if($rows){
                    echo("$username logged in succesfully");
                }else{
                    echo("Login failed for $username");
                }
            }
        ?>
    </body>
</html>