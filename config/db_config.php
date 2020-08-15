<?php

$conn = mysqli_connect('localhost','tae','1234','pizza');

if(!$conn){
    echo 'connection error' . mysqli_connect_error();
}

$sql = 'SELECT title,ingredients,id FROM pizza';
$result = mysqli_query($conn,$sql);

?>