<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div class="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div class="lewy1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <?php
            $connect=mysqli_connect('localhost',"root","","wedkowanie");
            $kw3="SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM lowisko JOIN ryby WHERE ryby.id=lowisko.Ryby_id AND lowisko.rodzaj=3;";
            $zap1=mysqli_query($connect,$kw3);
            echo "<ol>";
            while($row=mysqli_fetch_row($zap1)){
               
                echo "<li>$row[0] pływa w rzece $row[1], $row[2]</li>";
               
            }
            echo "</ol>";
        ?>
    </div>
    <div class="prawy">
    <img src="ryba1.jpg" alt="Sum" /><br/>
			<a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div class="lewy2">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <th>L.p.</th>
            <th>Gatunek</th>
            <th>Występowanie</th>
            <?php
                $kw2="SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia =1;";
                $zap2=mysqli_query($connect,$kw2);
                while ($row = mysqli_fetch_array($zap2)) {
					echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
				}
				mysqli_close($connect);

            ?>
        </table>
    </div>
    
    <div class="stopka">
        <p>Stronę wykonał: 00000000000</p>
    </div>
</body>
</html>