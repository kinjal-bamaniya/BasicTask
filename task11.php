<html>
<head>
<title> Task11</title>
</head>
<body>
<h2> Task 11: Enter n numbers and make pyramid’s design according to n number as max stars (*)
</h2>
<form method="POST" action="">
<h5> Enter number n </h5>
<input type="text" name="num">
<button type="submit" name="submit">Submit</button>

</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$num=$_POST['num'];

for($i=1;$i<=$num;$i++)
{
	for($k=$num-1;$k>=$i;$k--)
	{
		echo "_";
	}
	for($j=1;$j<=$i;$j++)
	{
		echo "*";
	}
	
	echo "<br>";
}
   for($i=1;$i<=$num-1;$i++)
   {
	   for($k=1;$k<=$i;$k++)
	{
		echo "_";
	}
	
	for($j=$num-1;$j>=$i;$j--)
	{
		echo "*";
	}
	
	echo "<br>";
   }
}

?>