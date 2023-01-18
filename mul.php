<!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta charset="UTF-8"> -->
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<title>Multiplication</title>
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<input type="number" placeholder="Enter number" id="number"
onblur="mul(this.value)">
<table border="1" align="center" style="text-align:center;">
<tbody id="mul"></tbody>
</table>
</body>
</html>
<script>
function mul(value)
{
$.ajax({
dataType : "json",
method:"POST",data:{value:value},
url:"ajax.php",
success:function(data)
{
$("#mul").html(data.result)
}
})
}
</script>