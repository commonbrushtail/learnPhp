<?php

include ('config/db_config.php');

//convert result to array
$pizza = mysqli_fetch_all($result,MYSQLI_ASSOC);
 





//free result form memory
mysqli_free_result($result);
//close connection to server
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>

<body>

    <?php include 'components/navBar.php' ?>


    <div class="grid">

        <?php foreach ($pizza as $value){ ?>
            <div class="card">
                <div class="title"><?php echo htmlspecialchars($value['id']);?></div>
                <div class="title"><?php echo htmlspecialchars( $value['title']);?></div>
                
                <?php foreach (explode(',', $value['ingredients']) as $ingre)  {?>
                    <li><?php echo htmlspecialchars( $ingre);  ?> </li>
                <?php } ?>
            
            </div>

        <?php } ?>



    </div>


    <?php include 'components/footer.php'?>
</body>

</html>