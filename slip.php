<!DOCTYPE html>
<html>
    <head>
        <title>Employee Information</title>
    </head>
    <body>
        <?php
            $name = $_POST["name"];
            $position = $_POST["position"];
            $salary = $_POST["salary"];

            switch($position){
                case "Manager":
                    $conveyanceAllowance = 1000;
                    $extraAllowance = 500;

                case "Supervisor":
                    $conveyanceAllowance = 750;
                    $extraAllowance = 200;                    

                case "Clerk":
                    $conveyanceAllowance = 500;
                    $extraAllowance = 100; 
    
                case "Peon":
                    $conveyanceAllowance = 250;
                    $extraAllowance = 0;
            }

            $hra = 0.25 * $salary;
            $gross = $salary + $hra + $conveyanceAllowance + $extraAllowance;

            if($gross > 5000){
                
            }
        ?>
    </body>
</html>