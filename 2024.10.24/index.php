<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze SELECT, RADIO, CHECKBOX</title>
</head>
<body>
    <main>
        <form method="POST">
            <fieldset>
                <legend>Przesyłanie różnych typów plików</legend>
                <label for="poleSelect">Wybierz osobę</label>
                <select id="poleSelect" name="poleSelect">
                    <option value="osoba1">Kamil Strzelecki</option>
                    <option value="osoba2">Jakub Mizera</option>
                    <option value="osoba3">Tobiasz Ryszka</option>
                </select>
                <br>
                <label for="poleRadio">Wybierz jedną z opcji</label>
                <br>
                <input type="radio" id="samochod" name="poleRadio" value="samochod">
                <label for="samochod">Samochód</label><br>
                <input type="radio" id="motocykl" name="poleRadio" value="motocykl">
                <label for="motocykl">Motocykl</label><br>
                <input type="radio" id="rower" name="poleRadio" value="rower">
                <label for="rower">Rower</label><br>
                <br>
                <input type="reset" value="Reset">
                <input type="submit" value="Wyślij">
            </fieldset>
        </form>
    </main>
    <section id="wynik">
        <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                echo "Działa<br>";
                echo $_POST['poleSelect'];
                switch($_POST['poleSelect']){
                    case "osoba1":
                        echo "Kamil ostanio odpowiadał z Baz danych<br>";
                        break;
                    case "osoba2":
                        echo "Kuba dzisiaj pracuje <br>";
                        break;
                    case "osoba3":
                        echo "Tobiasz dzisiaj odpoczywa<br>";
                        break;
                    default:
                        echo "Błędne dane";
                }

            }else{
                echo "Brak danych<br>";
            }
        ?>
    </section>
</body>
</html>