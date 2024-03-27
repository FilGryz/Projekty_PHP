<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Komis_Filip_Gryzło</title>
</head>
<body>
    <h1>Dostepne samochody</h1>
    <table border="1">
        <tr>
            <th>Lp.</th>
            <th>Marka</th>
            <th>Model</th>
            <th>Rok Produkcji</th>
            <th>Rodzaj Napędu</th>
            <th>Ilość Koni</th>
            <th>Przebieg (km)</th>
            <th>Cena</th>
            <th>Usun</th>
            <th>Edytuj</th>
            
        </tr>
        <?php
            $poloczenie = mysqli_connect("localhost", "root", "", "komis");

            if (!$poloczenie) {
                die("Brak połączenia z baza " . mysqli_connect_error());
            }
            
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['usun'])) {
                $id_do_usuniecia = $_POST['usun'];
                $sql_usun = "DELETE FROM Samochody WHERE ID = $id_do_usuniecia";
                if (mysqli_query($poloczenie, $sql_usun)) {
                }
            }
            

            $sql = "SELECT * FROM Samochody";
            $wynik = mysqli_query($poloczenie, $sql);

            if (mysqli_num_rows($wynik) > 0) {
                while($index = mysqli_fetch_assoc($wynik)) {
                    echo "<tr>";
                    echo "<td>".$index['ID']."</td>";
                    echo "<td>".$index['Marka']."</td>";
                    echo "<td>".$index['Model']."</td>";
                    echo "<td>".$index['Rok_Produkcji']."</td>";
                    echo "<td>".$index['Rodzaj_Napedu']."</td>";
                    echo "<td>".$index['Ilosc_Koni']."</td>";
                    echo "<td>".$index['Przebieg_km']."</td>";
                    echo "<td>".$index['Cena']." Zł"."</td>";
                    echo "<td><form method='post' action='" . ($_SERVER["PHP_SELF"]) . "'><input type='hidden' name='usun' value='" . $index['ID'] . "'><button type='submit' class='usun'>Usuń</button></form></td> ";
                    echo "<td><form method='post' action='edytuj_samochod.php'><input type='hidden' name='edytuj' value='" . $index['ID'] . "'><button type='submit' class='edytuj'>Edytuj</button></form></td>";
                    
                    echo "</tr>";
                }
            } else {
                echo "Brak połączenia z baza";
            }
            

            mysqli_close($poloczenie);
        ?>
</table>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="marka">Marka:</label>
    <input type="text" id="marka" name="marka" required><br><br>

    <label for="model">Model:</label>
    <input type="text" id="model" name="model" required><br><br>

    <label for="rok_produkcji">Rok Produkcji:</label>
    <input type="number" id="rok_produkcji" name="rok_produkcji" required><br><br>

    <label for="naped">Rodzaj Napędu:</label>
    <input type="text" id="naped" name="naped" required><br><br>

    <label for="Ilosc_Koni">Ilość Koni:</label>
    <input type="number" id="Ilosc_Koni" name="konie" required><br><br>

    <label for="Przebieg_km">Przebieg:</label>
    <input type="number" id="Przebieg_km" name="Przebieg_km" required><br><br>

    <label for="cena">Cena:</label>
    <input type="number" id="cena" name="cena" required><br><br>

    <input type="submit" class="button1" value="Dodaj Samochód" onclick="odswiezStrone()" >
</form>
<?php
$poloczenie = new mysqli("localhost", "root", "", "komis");

if ($poloczenie->error) {
    die("Brak połączenia z baza" . $conn->error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marka = $_POST["marka"];
    $model = $_POST["model"];
    $rok_produkcji = $_POST["rok_produkcji"];
    $naped = $_POST["naped"];
    $konie = $_POST["konie"];
    $przebieg = $_POST["Przebieg_km"];
    $cena = $_POST["cena"];

    $sql = "INSERT INTO Samochody (Marka, Model, Rok_Produkcji, Rodzaj_Napedu, Ilosc_Koni, Przebieg_km, Cena)
    VALUES ('$marka', '$model', '$rok_produkcji', '$naped', '$konie', '$przebieg', '$cena')";

    if ($poloczenie->query($sql) === TRUE) {
        echo "Dodano fure !!";
    }
}

$poloczenie->close();
?>



</body>
</html>
