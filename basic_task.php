<?php
//-------------------------------------------------------------------Task1----------------------------------------------------------------------------------------------------------
echo "-----------------------------------------------------------------------TASK1--------------------------------------------------------------------------------<br/>";
for($i=1;$i<=5;$i++)
	{
	  for($j=1;$j<=$i;$j++)
	      {
	          echo "*";
	      }
		  echo "<br/>";
	}

//-----------------------------------------------------------------Task2---------------------------------------------------------------------------------------------------------------------
echo "-----------------------------------------------------------------------TASK2--------------------------------------------------------------------------------<br/>";
  for($i=1; $i<=5; $i++) {
for($j=4; $j>=$i; $j--)  //loop to print spaces
{
echo '&nbsp;&nbsp;';
}
for($k=1; $k<=$i; $k++)  //loop to print stars
{
echo '*';
}
echo '<br>';
}


//------------------------------------------------------------------Task3---------------------------------------------------------------------------------------------------------------------------
echo "-----------------------------------------------------------------------TASK3--------------------------------------------------------------------------------<br/>";
for($i=0;$i<=5;$i++)
	{
	  for($j=5-$i;$j>=1;$j--)
	      {
	          echo "*";
	      }
		  echo "<br/>";
	}

//------------------------------------------------------------------Task 4---------------------------------------------------------------------------------------------------------------
echo "-----------------------------------------------------------------------TASK4--------------------------------------------------------------------------------<br/>";
for($i=1;$i<=6;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
		echo '&nbsp;&nbsp';

	}
	for($k=5;$k>=$i;$k--)
	{
		echo '*';

	}
	echo '<br>';

}
//--------------------------------------------------------------------------Task 5--------------------------------------------------------------------------------------------------------
echo "-----------------------------------------------------------------------TASK5--------------------------------------------------------------------------------<br/>";
for($i=1;$i<=4;$i++)
{
	for($j=0;$j>=$i;$j--)
	{
		echo '&nbsp;';

	}
	for($k=1;$k<=$i;$k++)
	{
		echo '*';
	

	}
	echo "<br>";
	
}
//------------------------------------------------------------------------Task 6---------------------------------------------------------------------------------------------------------
echo "-----------------------------------------------------------------------TASK6--------------------------------------------------------------------------------<br/>";
for($i=1;$i<=5;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
	echo $j;
	}echo "<br>";

}
	//---------------------------------------------------------------------Task 7--------------------------------------------------------------------------------------
echo "-----------------------------------------------------------------------TASK7--------------------------------------------------------------------------------<br/>";
for($i=1;$i<=5;$i++)
{
	for($j=0;$j<$i;$j++)
	{
	echo $i;
	}echo "<br>";

}
//----------------------------------------------------------------------------Task 8-------------------------------------------------------------------------------------
echo "-----------------------------------------------------------------------TASK8--------------------------------------------------------------------------------<br/>";
$alpha=range('A','Z');
$k=0;
for($i=1;$i<=5;$i++)
{
	for($j=0;$j<$i;$j++)
	{
	echo $alpha[$k];
	$k++;
	}echo "<br>";

}
//----------------------------------------------------------------------------Task 9-----------------------------------------------------------------------------------------
echo "-----------------------------------------------------------------------TASK9--------------------------------------------------------------------------------<br/>";
$alpha=range('A','Z');

for($i=0;$i<=4;$i++)
{
	for($k=4;$k>=$i;$k--)
	{
		echo '&nbsp;';

	}
	for($j=0;$j<=$i;$j++)
	{
	echo $alpha[$i];
	
	}echo "<br>";

}

//------------------------------------------------------------------------Task 15---------------------------------------------------------------------------------------------------------
echo "-----------------------------------------------------------------------TASK15--------------------------------------------------------------------------------<br/>";
for($i=0;$i<=5;$i++)
{
	for($j=5-$i;$j>=1;$j--)
	{
	echo $j;
	}echo "<br>";

}
//------------------------------------------------------------------------Task 16---------------------------------------------------------------------------------------------------------
echo "-----------------------------------------------------------------------TASK16--------------------------------------------------------------------------------<br/>";
for($i=0;$i<=5;$i++)
{
	for($k=4;$k>=$i;$k--)
	{
		echo '&nbsp;&nbsp';
	}
	for($j=1;$j<=$i;$j++)
	{
	echo $j;
	}echo "<br>";

}

//------------------------------------------------------------------------Task 17---------------------------------------------------------------------------------------------------------
echo "-----------------------------------------------------------------------TASK17--------------------------------------------------------------------------------<br/>";
for($i=1;$i<=5;$i++)
	
{
	for($k=0;$k<=$i;$k++)
	{
		echo '&nbsp';
	}
	for($j=$i;$j<=5;$j++)
	{
	echo $j;
	}echo "<br>";

}
//------------------------------------------------------------------------Task 18---------------------------------------------------------------------------------------------------------
echo "-----------------------------------------------------------------------TASK18--------------------------------------------------------------------------------<br/>";
$k=1;
for($i=1;$i<=5;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
	 echo $k;
	 $k++;
	
	}echo "<br>";

}


?>
