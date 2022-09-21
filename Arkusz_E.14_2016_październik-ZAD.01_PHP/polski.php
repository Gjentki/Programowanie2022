<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <title>Szkoła Ponadgimnazjalna</title>
</head>
<body>
    <div id="baner">
        <h1>Oceny uczniów: język polski</h1>
    </div>
    <div id="lewy">
        <h2>Lista uczniów:</h2>
        <?php
            include("lewy.php");
        ?>
    </div>
    <div id="prawy">
        <br>
        <h2>Uczeń: <?php
            include("prawy.php");
        ?></h2> 
        
        <p>Średnia ocen z języka polskiego: <?php
            include("prawy_dol.php");
        ?></p>
    </div>
    <div id="stopka"> 
        <br>
        <h3>Zespół Szkół Ponadgimnazjalnych</h3>
        <p>Stronę opracował: 00000000000 </p>
    </div>
</body>
</html>