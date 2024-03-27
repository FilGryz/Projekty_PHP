<?php
$polaczenie = mysqli_connect("localhost", "root", "", "komis");

if (!$polaczenie) {
    die("Brak połączenia z baza" . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id_do_edycji = $_POST['id'];
    $nowa_marka = $_POST['marka'];
    $nowy_model = $_POST['model'];
    $nowy_rok_produkcji = $_POST['rok_produkcji'];
    $nowy_naped = $_POST['naped'];
    $nowe_konie = $_POST['konie'];
    $nowy_przebieg = $_POST['przebieg'];
    $nowa_cena = $_POST['cena'];

    $sql_zaktualizuj_samochod = "UPDATE Samochody SET 
        Marka = '$nowa_marka', 
        Model = '$nowy_model', 
        Rok_Produkcji = '$nowy_rok_produkcji', 
        Rodzaj_Napedu = '$nowy_naped', 
        Ilosc_Koni = '$nowe_konie', 
        Przebieg_km = '$nowy_przebieg', 
        Cena = '$nowa_cena' 
        WHERE ID = $id_do_edycji";

    if (mysqli_query($polaczenie, $sql_zaktualizuj_samochod)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Brak połączenia z baza" . mysqli_error($polaczenie);
    }
}

mysqli_close($polaczenie);
?>
