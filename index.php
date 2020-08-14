


<?php 

$all = ['title'=>'mario party', 'publisher'=> 'nintendo'];




$test = [1,2,3,4,5,6,7,8,9,1,0,1,2,4];











?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    

</head>
<body>
    
    <ul>
    <?php foreach ($test as $key) : ?>
      
      <li><?php echo $key; ?></li>


    <?php endforeach;?>


    </ul>

    
</body>
</html>