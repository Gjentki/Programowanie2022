<?php
    $zmienna1=$_GET["zmienna1"];
    $zmienna1=$_GET["zmienna1"];
    $zmienna3=$_GET["zmienna3"];
    $polacz1=mysqli_connect("localhost" , "root", "", "baza");
    $zapytanie1="INSERT INTO `baza` (`kolumna1`, `kolumna2`, `kolumna3`, `kolumna4`) VALUES (NULL, '$zmienna1', '$zmienna2', '$zmienna3')"; 
    $polaczenie2=mysqli_query($polacz1, $zapytanie1);
?>