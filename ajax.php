<?php
$html='';
$number = $_POST['value'];
$html.="<tr><td colspan='2'>Multiplication table of ".$number."</td></tr>";
for($j=1;$j<=10;$j++)
{
$html.="<tr><td>".$j." * ".$number." = ".$number*$j."</td></tr>";
}
echo json_encode(array('result' =>$html));
?>