<?php 
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'szkola');
    $prawy = mysqli_query($connect,"SELECT imie, nazwisko FROM uczen WHERE id=2");
    while($row = mysqli_fetch_array($prawy)){
        echo $row['imie'] . " ". $row['nazwisko'];
    }
    
?>