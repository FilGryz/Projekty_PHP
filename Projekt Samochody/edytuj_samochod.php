<?php
$polaczenie = mysqli_connect("localhost", "root", "", "komis");

if (!$polaczenie) {
    die("Brak połączenia z baza" . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edytuj'])) {
    $id_do_edycji = $_POST['edytuj'];
    $sql_pobierz_samochod = "SELECT * FROM Samochody WHERE ID = $id_do_edycji";
    $wynik_pobierz_samochod = mysqli_query($polaczenie, $sql_pobierz_samochod);
    $samochod = mysqli_fetch_assoc($wynik_pobierz_samochod);
    
    echo "<h2>Edytuj samochód</h2>";
    echo "<form method='post' action='zapisz_edycje.php'>";
    echo "<input type='hidden' name='id' value='" . $samochod['ID'] . "'>";
    echo "<label for='marka'>Marka:</label>";
    echo "<input type='text' id='marka' name='marka' value='" . $samochod['Marka'] . "' required><br><br>";
    echo "<label for='model'>Model:</label>";
    echo "<input type='text' id='model' name='model' value='" . $samochod['Model'] . "' required><br><br>";
    echo "<label for='rok_produkcji'>Rok Produkcji:</label>";
    echo "<input type='number' id='rok_produkcji' name='rok_produkcji' value='" . $samochod['Rok_Produkcji'] . "' required><br><br>";
    echo "<label for='naped'>Rodzaj Napędu:</label>";
    echo "<input type='text' id='naped' name='naped' value='" . $samochod['Rodzaj_Napedu'] . "' required><br><br>";
    echo "<label for='Ilosc_Koni'>Ilość Koni:</label>";
    echo "<input type='number' id='Ilosc_Koni' name='konie' value='" . $samochod['Ilosc_Koni'] . "' required><br><br>";
    echo "<label for='Przebieg_km'>Przebieg:</label>";
    echo "<input type='number' id='Przebieg_km' name='przebieg' value='" . $samochod['Przebieg_km'] . "' required><br><br>";
    echo "<label for='cena'>Cena:</label>";
    echo "<input type='number' id='cena' name='cena' value='" . $samochod['Cena'] . "' required><br><br>";
    echo "<input type='submit' value='Zapisz zmiany'>";
    echo "</form>";
}


mysqli_close($polaczenie);
?>
