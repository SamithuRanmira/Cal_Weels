<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php

$num1="";
$num2="";
$sym="";
$ans="";
if(isset($_POST["s1"]))
{
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$ans=$num1+$num2;
}
if(isset($_POST["s2"]))
{
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
$ans=$num1-$num2;
}

if(isset($_POST["s3"]))
{
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];            
$ans=$num1*$num2;
}

if(isset($_POST["s4"]))
{
$num1=$_POST['num1'];
$num2=$_POST['num2'];         
$ans=$num1/$num2;
}

if(isset($_POST["s5"]))
{
$num1=$_POST['num1'];
$num2=$_POST['num2'];
    $num1="";
    $num2="";
    $ans="";
}
?>

    <form method="POST" class="form1">
        <div class="container_01">
            <div class="container_02">
                <div class="inputs">
                    <div>
                        Number 1: <input type="number" name="num1" value="<?php echo ($num1)?>">
                    </div>
                    <div>
                        Number 2: <input type="number" name="num2" value="<?php echo ($num2)?>"><br>
                    </div>
                    <div>
                        Answer&nbsp;&nbsp;&nbsp;: <input type="number" name="ans" value="<?php echo $ans; ?>">
                    </div>
                </div>
                <div class="container_03">
                    <div class="operators">
                        <div>
                            <input type="submit" value="+" name="s1">
                        </div>
                        <div>
                            <input type="submit" value="-" name="s2">
                        </div>
                        <div>
                            <input type="submit" value="*" name="s3">
                        </div>
                        <div>
                            <input type="submit" value="/" name="s4">
                        </div>
                        <div>
                            <input type="reset" value="clear" name="s5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
