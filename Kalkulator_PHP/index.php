<?php
    if(isset($_POST['liczba1'], $_POST['liczba2'], $_POST['znak'])) {
        $liczba1 = $_POST['liczba1'];
        $liczba2 = $_POST['liczba2'];
        $znak = $_POST['znak'];


if(is_numeric($liczba1) && is_numeric($liczba2)) {
    switch($znak) {
        case "+":
            $wynik = $liczba1 + $liczba2;
            break;
        case "-":
            $wynik = $liczba1 - $liczba2;
            break;
        case "*":
            $wynik = $liczba1 * $liczba2;
            break;
        case "/":
            if($liczba2 == 0) {
                echo "Nie dziel przez zero!";
            } else {
                $wynik = $liczba1 / $liczba2;
            }
            break;
        default:
            echo "Nieznany operator";
            return;
    }
    echo "Wynik: $wynik";
} else {
    echo "Wprowadziłeś złe wartości !";
}
}


?>
