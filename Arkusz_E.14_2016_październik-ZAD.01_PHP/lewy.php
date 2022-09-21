<?php 
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'szkola');
    $lewy = mysqli_query($connect,"SELECT imie, nazwisko FROM uczen");
    echo "<ol>";
    while($row = mysqli_fetch_array($lewy)){
        echo "<li>" . $row['imie'] . " ". $row['nazwisko'];
    }
    echo "</ol>";
    
?>