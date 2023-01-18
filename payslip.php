<head><title>employee salary</title></head>
<body>
<?php
$na = $_POST["nam"];
$des = $_POST["design"];
$basic = $_POST["sal"];
switch ($des) {
    case "Manager":
        $ca = 1000;
        $ea = 500;
        break;
    case "Supervisor":
        $ca = 750;
        $ea = 200;
        break;
    case "Clerk":
        $ca = 500;
        $ea = 100;
        break;
    case "Peon":
        $ca = 250;
        $ea = 0;
        break;
}
$hra = 0.25 * $basic;
$gross = $basic + $ca + $ea + $hra;
if ($gross > 5000) {
    $it = $gross * 0.08;
} elseif ($gross > 4000) {
    $it = $gross * 0.05;
} elseif ($gross > 2500) {
    $it = $gross * 0.03;
} else {
    $it = 0;
}
$net = $gross - $it;
echo "<table border=1 rules=all width=50%>
<tr><td colspan=2 align=center><strong>PAYSLIP</strong></td></tr>
<tr>
<td width=50%>Employee Name</td>
<td width=50%>$na</td>
</tr>
<tr>
<td width=50%>Designation</td>
<td width=50%>$des</td>
</tr>
<tr bgcolor=eeeee>
<td>Salary Component</td><td>Amount(in Rs)</td></tr>
<tr>
<td>Basic Salary</td>
<td>$basic</td>
</tr>
<tr>
<td>Conveyance Allowance</td>
<td>$ca</td>
</tr>
<tr>
<td>extra allowance</td>
<td>$ea</td>
</tr>
<tr>
<td>House rent allowance</td>
<td>$hra</td>
</tr>
<tr bgcolor=eeeeee>
<td>Gross Salary</td>
<td>$gross</td>
</tr>
<tr bgcolor=eeeeee>
<td>Income tax Deduction</td>
<td>$it</td>
</tr>
<tr bgcolor=eeeeee>
<td><strong>Net Salary</strong></td>
<td><h3>$net</h3></td>
</tr>
</table>";
?>
<input type=button name=click value="prepare another payslip" onclick= "parent.location
='employee.html' ">
</body>
</html>