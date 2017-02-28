<html>
<head>
<style>

body{
	background-color: lightyellow;
	width: 300px;
	height: 250px;
	outline: 1px solid black;
	padding: 25px;
	margin: 25px;
}
h1
{
	font-size:100%;
	color: green;
}
</style>
</head>

<body>
<form action="calc.php" method="POST">
<p style="font-size: 150%;text-align: center;">Tip Calculator
<h1>Bill subtotal: $ 
	<input type="text" name="num1" value="<?php if(isset($_POST['num1'])){echo $_POST['num1'];}?>"</br>
<p>Tip percentage:
			
			<p><input type="radio" name="g" <?php if(isset($_POST['g']) && $_POST['g'] == '10%') echo "checked";?> value="10%"> 10%
			<input type="radio" name="g" <?php if(isset($_POST['g']) && $_POST['g'] == '15%') echo "checked";?> value="15%"> 15%
			<input type="radio" name="g" <?php if(isset($_POST['g']) && $_POST['g'] == '20%') echo "checked";?> value="20%"> 20%
		
	<p><input type="submit" value="Submit">

</form>
</style>
</head>
</body>
</html>
<?PHP

$num1 = $_POST["num1"];
$tip = $_POST["g"];
if(is_numeric("$num1") && (int)$num1 > 0)
{

	if($tip == "10%")
	{
		$answer_10 = $num1 * 0.1;
		$total_10 = $num1 + $answer_10;
		
		echo "Tip: $".number_format($answer_10,2,'.',',');
		echo "<br/>";
		echo "Total: $".number_format($total_10,2,'.',',');
	}
	if($tip == "15%")
	{
		$answer_15 = $num1 * 0.15;
		$total_15 = $num1 + $answer_15;
		echo "Tip: $".number_format($answer_15,2,'.',',');
		echo "<br/>";
		echo "Total: $".number_format($total_15,2,'.',',');
	}
	if($tip == "20%")
	{
		$answer_20 = $num1 * 0.2;
		$total_20 = $num1 + $answer_20;
		echo "Tip: $".number_format($answer_20,2,'.',',');
		echo "<br/>";
		echo "Total: $".number_format($total_20,2,'.',',');;
	}
}
else
{
	echo "Please enter valid numbers.";
}
?>