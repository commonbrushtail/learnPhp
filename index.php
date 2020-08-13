<?php 

define('NAME','Tae');

echo 'hello, ninjas';
$age = '[lqaw;ldkas;ldask';
$number = 5464;
$stringOne = 'my email is ';
$stringTwo = 'asdpkfpoa@gmail.com';

echo strlen(NAME);

$array = [1,2,3,4,5,6,7];
$arrayString = ['ttat','asdasd','asdasd'];
print_r($array);
print_r($arrayString[2]);
$arrayString[2] = "test";
print_r($arrayString);
$array[]= 50;
print_r($array);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1><?php echo $age, $number?></h1>
    <h2><?php echo NAME;?></h2>
    <h2><?php echo $stringOne . $stringTwo;?></h2>
    <h2><?php echo $stringTwo;?></h2>
    <h3><?php echo "the ninja scream $NAME";?> </h3>    
</body>
</html>