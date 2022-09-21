<?php 
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'szkola');
    $prawy2 = mysqli_query($connect,"SELECT AVG (ocena) FROM ocena WHERE uczen_id=2 AND przedmiot_id=1");
    while($row = mysqli_fetch_array($prawy2)){
        echo $row['AVG (ocena)'];
    }
    
?>











