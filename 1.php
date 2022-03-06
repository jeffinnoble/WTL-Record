<!DOCTYPE html>
<head>
<title>Welcome to inlarn.com</title>
</head>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($a) && is_numeric($b)) 
{
switch ($operator)
{
case "Add":
$result = $a + $b;
break;
case "Subtract":
$result = $a - $b;
break;
case "Multiply":
$result = $a * $b;
break;
case "Divide":
$result = $a / $b;
}
}
?>
<body>
<div id="page-wrap">
<h1>calculator</h1>
<form action="" method="post" id="quiz-form">
<p>
<input type="number" name="a" id="a" required="required" 
value="<?php echo $a; ?>" /> <b>First number</b>
</p>
<p>
<input type="number" name="b" id="b" required="required" 
value="<?php echo $b; ?>" /> <b>Second number</b>
</p>
<p>
<input readonly="readonly" name="result" 
value="<?php echo $result; ?>"> <b>Result</b>
</p>
<input type="submit" name="operator" value="Add" />
<input type="submit" name="operator" value="Subtract" />
<input type="submit" name="operator" value="Multiply" />
<input type="submit" name="operator" value="Divide" />
</form>
</div>
</body>
</html>