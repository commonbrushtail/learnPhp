<?php
    $title = $email = $ingredients = '';
    $error = ['email'=>'','title'=>'','ingredients'=>''];
    
        if(isset($_POST['submit'])){
            if(empty($_POST['email'])){
                $error['email']='please enter email';
            } else {
                $email = $_POST['email'];
                if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                   $error['email'] = 'email is not valid';
                }
            }
    
            if(empty($_POST['ingredients'])){
                $error['ingredients']='ingredients is required';
            } else {
                $ingredients = $_POST['ingredients'];
                if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)){
                    $error['ingredients'] = 'ingredients must be seperated by comma';
                }
            }
    
            if(empty($_POST['title'])){
                $error['title'] = 'title is required';
            } else {
                $title = $_POST['title'];
                if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
                    $error['title'] = 'title must be letter and space only';
                }
            }
    
            
        }

        

    


?>



<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
<body>

<?php include 'components/navBar.php' ?>

<section class="addPizzaContainer">
    <h1>Add a Pizza</h1>
    <form class="addPizza" action="add.php" method="POST">
        <label for="">Your Email</label>
        <div><?php echo $error['email']; ?></div>
        <input type="text" name="email" value = "<?php echo $email;?>">
        <label for="">Pizza Title</label>
        <div><?php echo $error['title']; ?></div>
        <input type="text" name="title" value = "<?php echo $title;?>">
        <label for="">ingredients</label>
        <div><?php echo $error['ingredients']; ?></div>
        <input type="text" name="ingredients" value ="<?php echo $ingredients;?>">
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>

</section>




<?php include 'components/footer.php'?>
</body>
</html>