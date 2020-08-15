<?php
$conn = mysqli_connect('localhost','tae','1234','pizza');

if(!$conn){
    echo 'error no connection' . mysqli_connect_error();
}

$sql = 'SELECT title,ingredients,id FROM pizza';
$result = mysqli_query($conn,$sql);

$pizza = mysqli_fetch_all($result,MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

print_r ($pizza);

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
<body>

<?php include 'components/navBar.php' ?>




<?php include 'components/footer.php'?>
</body>
</html>