<html>
<head>
<title> Task13</title>
</head>
<body>
<h2> Task 13: Enter n numbers and make pyramid’s design according to n number as max stars (*),
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
$n=$_POST['num'];

           // $n = $_POST['n1'];
            for ($i = 2; $i < $n + 1; $i++) 
			{
                for ($j = $i; $j < $n + 1; $j++)
					{
                    echo " &nbsp;";
                }
                for ($j = 1; $j <= (2 * $i - 1); $j++)
					{
                    if ($j % 2 == 0)
						{
                        echo "*";
                         } 
				    else 
					{
                        echo "_";
                    }
                }
                echo "<br>";
            }
}
?>