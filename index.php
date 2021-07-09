<html>
<head>
<title>Control Panel</title>
<link rel="stylesheet" href="style2.css">
</head>

<body>
<?php
$connection = new mysqli("localhost","root","");
?>
<h1>Control Panel</h1>
<form action="" name="form1" method="post">
<div class="middle">
<button type="submit" name="left" class="btn btn1">left</button>
<button type="submit" name="right" class="btn btn2">right</button>
<button type="submit" name="forward" class="btn btn3">forward</button>
<button type="submit" name="backward" class="btn btn4">backward</button>
<button type="submit" name="stop" class="btn btn5">stop</button>
</div>
</form>

<?php
if(isset($_POST["left"]))
{
echo '<span style="color:#FFFFFF;text-align:center;">L</span>';
}
if(isset($_POST["right"]))
{
echo '<span style="color:#FFFFFF;text-align:center;">R</span>';
}
if(isset($_POST["forward"]))
{
echo '<span style="color:#FFFFFF;text-align:center;">F</span>';
}
if(isset($_POST["backward"]))
{
echo '<span style="color:#FFFFFF;text-align:center;">B</span>';
}
if(isset($_POST["stop"]))
{
echo '<span style="color:#FFFFFF;text-align:center;">S</span>';
}

?>



</body>







</html>