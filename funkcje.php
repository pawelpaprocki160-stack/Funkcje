<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania JavaScript</title>
</head>
<body>


<!-- ZADANIE 1 - SUMA -->

<h2>Zadanie 1 - SUMA</h2>

<input type="number" id="a1">
<input type="number" id="b1">
<button onclick="suma()">Oblicz</button>

<p id="wynik1"></p>

<script>
function suma() {
    let a = parseInt(document.getElementById("a1").value);
    let b = parseInt(document.getElementById("b1").value);

    document.getElementById("wynik1").innerHTML = a + b;
}
</script>



<!-- ZADANIE 2 - PODSTAWY -->

<h2>Zadanie 2 - PODSTAWY</h2>

<input type="number" id="a2">
<input type="number" id="b2">
<button onclick="podstawy()">Oblicz</button>

<p id="wynik2"></p>

<script>
function podstawy() {
    let a = parseFloat(document.getElementById("a2").value);
    let b = parseFloat(document.getElementById("b2").value);

    document.getElementById("wynik2").innerHTML =
    "Różnica: " + (a - b) +
    "<br>Iloczyn: " + (a * b) +
    "<br>Iloraz: " + (a / b);
}
</script>



<!-- ZADANIE 3 - KALKULATOR -->

<h2>Zadanie 3 - KALKULATOR</h2>

<input type="number" id="a3">
<input type="number" id="b3">

<select id="dzialanie">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select>

<button onclick="kalkulator()">Oblicz</button>

<p id="wynik3"></p>

<script>
function kalkulator() {
    let a = parseFloat(document.getElementById("a3").value);
    let b = parseFloat(document.getElementById("b3").value);
    let dzialanie = document.getElementById("dzialanie").value;
    let wynik;

    if (dzialanie == "+")
        wynik = a + b;

    if (dzialanie == "-")
        wynik = a - b;

    if (dzialanie == "*")
        wynik = a * b;

    if (dzialanie == "/")
        wynik = a / b;

    document.getElementById("wynik3").innerHTML = wynik;
}
</script>



<!-- ZADANIE 4 - MAKS -->

<h2>Zadanie 4 - MAKS</h2>

<input type="number" id="a4">
<input type="number" id="b4">
<input type="number" id="c4">

<button onclick="maks()">Sprawdź</button>

<p id="wynik4"></p>

<script>
function maks() {
    let a = parseInt(document.getElementById("a4").value);
    let b = parseInt(document.getElementById("b4").value);
    let c = parseInt(document.getElementById("c4").value);

    let maks = a;

    if (b > maks)
        maks = b;

    if (c > maks)
        maks = c;

    document.getElementById("wynik4").innerHTML = maks;
}
</script>



<!-- ZADANIE 5 - WZROST -->

<h2>Zadanie 5 - WZROST</h2>

<input type="number" id="wzrost">

<button onclick="wzrost()">Sprawdź</button>

<p id="wynik5"></p>

<script>
function wzrost() {
    let wzrost = parseInt(document.getElementById("wzrost").value);

    if (wzrost < 150)
        document.getElementById("wynik5").innerHTML = "niski";

    else if (wzrost > 180)
        document.getElementById("wynik5").innerHTML = "wysoki";

    else
        document.getElementById("wynik5").innerHTML = "średni";
}
</script>



<!-- ZADANIE 6 - BMI -->

<h2>Zadanie 6 - BMI</h2>

<input type="number" id="wzrost6" placeholder="Wzrost w cm">
<input type="number" id="waga6" placeholder="Waga w kg">

<button onclick="bmi()">Oblicz</button>

<p id="wynik6"></p>

<script>
function bmi() {
    let wzrost = parseFloat(document.getElementById("wzrost6").value);
    let waga = parseFloat(document.getElementById("waga6").value);

    wzrost = wzrost / 100;

    let bmi = waga / (wzrost * wzrost);

    if (bmi < 18.5)
        document.getElementById("wynik6").innerHTML = bmi + " za mało!";

    else if (bmi > 25)
        document.getElementById("wynik6").innerHTML = bmi + " za dużo!";

    else
        document.getElementById("wynik6").innerHTML = bmi + " OK!";
}
</script>



<!-- ZADANIE 7 - STARSZY -->

<h2>Zadanie 7 - STARSZY</h2>

<input type="date" id="data1">
<input type="date" id="data2">

<button onclick="starszy()">Sprawdź</button>

<p id="wynik7"></p>

<script>
function starszy() {
    let data1 = document.getElementById("data1").value;
    let data2 = document.getElementById("data2").value;

    if (data1 < data2)
        document.getElementById("wynik7").innerHTML = "Osoba 1 jest starsza";

    else if (data2 < data1)
        document.getElementById("wynik7").innerHTML = "Osoba 2 jest starsza";

    else
        document.getElementById("wynik7").innerHTML = "Osoby są w tym samym wieku";
}
</script>



<!-- ZADANIE 8 - ROK PRZESTĘPNY -->

<h2>Zadanie 8 - PRZESTĘPNY</h2>

<input type="number" id="rok">

<button onclick="rok()">Sprawdź</button>

<p id="wynik8"></p>

<script>
function rok() {
    let rok = parseInt(document.getElementById("rok").value);

    if (rok % 400 == 0 || (rok % 4 == 0 && rok % 100 != 0))
        document.getElementById("wynik8").innerHTML = "Rok jest przestępny";

    else
        document.getElementById("wynik8").innerHTML = "Rok nie jest przestępny";
}
</script>



<!-- ZADANIE 9 - SIŁA HASŁA -->

<h2>Zadanie 9 - SIŁA HASŁA</h2>

<input type="text" id="haslo">

<button onclick="haslo()">Sprawdź</button>

<p id="wynik9"></p>

<script>
function haslo() {
    let haslo = document.getElementById("haslo").value;

    if (!/[0-9]/.test(haslo))
        document.getElementById("wynik9").innerHTML = "Hasło słabe";

    else if (!/[A-Z]/.test(haslo))
        document.getElementById("wynik9").innerHTML = "Hasło słabe";

    else if (!/[a-z]/.test(haslo))
        document.getElementById("wynik9").innerHTML = "Hasło słabe";

    else if (!/[^A-Za-z0-9]/.test(haslo))
        document.getElementById("wynik9").innerHTML = "Hasło słabe";

    else if (haslo.length <= 4)
        document.getElementById("wynik9").innerHTML = "Hasło słabe";

    else if (haslo.length < 8)
        document.getElementById("wynik9").innerHTML = "Hasło średnie";

    else
        document.getElementById("wynik9").innerHTML = "Hasło mocne";
}
</script>



<!-- ZADANIE 10 - TRÓJKĄT -->

<h2>Zadanie 10 - TRÓJKĄT</h2>

<input type="number" id="a10">
<input type="number" id="b10">
<input type="number" id="c10">

<button onclick="trojkat()">Sprawdź</button>

<p id="wynik10"></p>

<script>
function trojkat() {
    let a = parseInt(document.getElementById("a10").value);
    let b = parseInt(document.getElementById("b10").value);
    let c = parseInt(document.getElementById("c10").value);

    if (a + b > c && a + c > b && b + c > a)
        document.getElementById("wynik10").innerHTML = "Można utworzyć trójkąt";

    else
        document.getElementById("wynik10").innerHTML = "Nie można utworzyć trójkąta";
}
</script>



<!-- ZADANIE 11 - SZYFR -->

<h2>Zadanie 11 - SZYFR</h2>

<input type="text" id="tekst" onkeyup="szyfruj()">

<span id="wynik11"></span>

<script>
function szyfruj() {
    let tekst = document.getElementById("tekst").value;
    let wynik = "";

    for (let i = 0; i < tekst.length; i++) {

        let litera = tekst[i];

        if (litera == "y")
            wynik = wynik + "a";

        else if (litera == "z")
            wynik = wynik + "b";

        else
            wynik = wynik + String.fromCharCode(litera.charCodeAt(0) + 2);
    }

    document.getElementById("wynik11").innerHTML = wynik;
}
</script>


</body>
</html>