<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 25</title>
</head>
<body>
    <h3>Task 25: Enter Starts with and End with value and get the even number pyramid</h3>
    <form action="" method="post">
        <label>Enter First Number:</label>
        <input type="text" name="num1"> </br></br>
        <label>Enter Second Number:</label>
        <input type="text" name="num2"> </br></br>
        <input type="submit" name="submit">
    </form>
    <?php

if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    for($i=$num1;$i<=$num2;$i++){
        for($j=$num1;$j<=$i;$j = $j+2){
            if($i%2==0){
            echo $i;
            }
        }echo "<br>";
    }
}
?>
