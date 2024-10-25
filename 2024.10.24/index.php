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
                <label for="opcje">Wybierz interesującą Ciebie grę</label>
                <br>
                <input type="checkbox" id="gra1" name="gra1">
                <label for="gra1">Fortnite</label>
                <br>
                <input type="checkbox" id="gra2" name="gra2">
                <label for="gra2">Roblox</label>
                <br>
                <input type="checkbox" id="gra3" name="gra3" value="CS">
                <label for="gra3">CS</label>
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
                echo "<h2>Pole RADIO</h2>";
                echo $_POST['poleRadio'];

                echo "<h2>Pole CHECKBOX</h2>";
                if(empty($_POST['gra1'])){
                    echo "Gra1 niezaznaczona<br>";
                }else{
                    echo "Gra1: ".$_POST['gra1']."<br>";
                    echo "Gra1 jest zaznaczona<br>";
                }
                if(empty($_POST['gra2'])){
                    echo "Gra2 niezaznaczona<br>";
                }else{
                    echo "Gra2: ".$_POST['gra2']."<br>";
                    echo "Gra2 jest zaznaczona<br>";
                }
                if(empty($_POST['gra3'])){
                    echo "Gra3 niezaznaczona<br>";
                }else{
                    echo "Gra3: ".$_POST['gra3']."<br>";
                    echo "Gra3 jest zaznaczona<br>";
                }


            }else{
                echo "Brak danych<br>";
            }
        ?>
    </section>
</body>
</html>