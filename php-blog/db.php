<?php 
    $db = mysqli_connect("localhost","root","","blog");
    if(mysqli_connect_error()){
        echo "Упс! Возникла ошибка".mysqli_connect_error();
    }
?>