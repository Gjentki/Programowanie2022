<?php
    $polacz=mysqli_connect("localhost" , "root", "", "baza");
    $zapytanie="SELECT * FROM `baza`";
    $zapytaniesql=mysqli_query($polacz, $zapytanie);

    echo "Tekst";
    while($row = mysqli_fetch_array($zapytaniesql))
    {
        echo $row['id'] . $row['imie'] . $row['nazwisko'];
    }
    mysqli_close($polacz);

?>