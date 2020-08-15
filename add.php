<?php

        if(isset($_POST['submit'])){
            if(empty($_POST['email'])){
                echo 'email is required';
            } else {
                $email = $_POST['email'];
                if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    echo 'this email is not valid';
                }
            }
    
            if(empty($_POST['ingredients'])){
                echo 'ingredients is required';
            } else {
                $ingredients = $_POST['ingredients'];
                if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)){
                    echo 'ingredients must be seperated by comma';
                }
            }
    
            if(empty($_POST['title'])){
                echo 'title is required';
            } else {
                $title = $_POST['title'];
                if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
                    echo 'title must be letter and space only';
                }
            }
    
            print_r( $_POST);
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
        <input type="text" name="email">
        <label for="">Pizza Title</label>
        <input type="text" name="title">
        <label for="">ingredients</label>
        <input type="text" name="ingredients">
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>

</section>




<?php include 'components/footer.php'?>
</body>
</html>