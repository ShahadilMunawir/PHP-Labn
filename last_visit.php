<!-- Program 18 -->

<!DOCTYPE html>
<html>
    <head>
        <title>Last Visit</title>
    </head>
    <body>
        <h2> Last visited time on the web page</h2>
        <?php
        $intm = 60 * 60 * 24 * 60 + time();
        setcookie('lastVisit', date("G:i - m/d/y"), $intm);
        if(isset($_COOKIE['lastVisit'])){
            $visit = $_COOKIE['lastVisit'];
            echo "Your last visit was - " . $visit;
        }else
            echo "You have not visited this website before!";
        ?>
    </body>
</html>