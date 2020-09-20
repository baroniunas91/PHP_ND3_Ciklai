<?php
echo '1) -------------------------------------------';
echo '<br>';

// Naršyklėje nupieškite linija iš 400 “*”. 
// Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
// Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
$star = '';
$jumpToNewLine = 50;
for($i = 1; $i <= 400; $i++) {
    $star .= '<p style="display: inline-block; width: calc(100% / 50)">*</p>';
}
echo "<div style=\"display: inline-block; width: 100%\">$star</div>";

echo '<br>';
echo '2) -------------------------------------------';
echo '<br>';

// Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir 
// suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.
$sk = '';
$count = 0;
for($i=0; $i<300; $i++) {
    $rand = rand(0, 300);
    if($rand > 150) {
        $count += 1;
    }
    if($rand > 275) {
        $sk .= "<p style=\"display: inline-block; margin: 3px; color: red\">$rand</p>";
    } else {
        $sk .= "<p style=\"display: inline-block; margin: 3px;\">$rand</p>";
    }
}
echo $sk;
echo '<br>';
echo "Didesnių už 150 yra: $count";

echo '<br>';
echo '3) -------------------------------------------';
echo '<br>';

// Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki 3000, kurie dalijasi iš 77 be liekanos. 
// Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, 
// kad visi rezultatai matytųsi ekrane.
$numbers = [];
for($i=1; $i<=3000; $i++) {
    if($i % 77 == 0) {
        array_push($numbers, "<p style=\"display: inline-block; margin-left: 3px;\">$i</p>");
    }
}
$numbers = implode(',', $numbers);
echo $numbers;

echo '<br>';
echo '4) -------------------------------------------';
echo '<br>';

// Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. 
// Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
$star = '';
for($i=0; $i<100; $i++) {
    $star .= '<div style="display: inline-block; margin: 0; height: 20px; width: 20px">*</div>';
}
echo "<div style=\"display: inline-block; width: 200px;\">$star</div>";

echo '<br>';
echo '5) -------------------------------------------';
echo '<br>';
// Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
$star = '';
for($i=0; $i<10; $i++) {
    for($j=0; $j<10; $j++) {
        if(($i == $j) || ($j == (10 - $i - 1))) {
            $star .= '<div style="display: inline-block; margin: 0; height: 20px; width: 20px; color: red">*</div>';
        } else {
            $star .= '<div style="display: inline-block; margin: 0; height: 20px; width: 20px">*</div>';
        }
    }
}
echo '<br>';
echo "<div style=\"display: inline-block; width: 200px;\">$star</div>";

echo '<br>';
echo '6) -------------------------------------------';
echo '<br>';

// Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. 
// Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. 
// Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
// Iškritus herbui;
// Tris kartus iškritus herbui;
// Tris kartus iš eilės iškritus herbui;
$moneta;
echo 'Iškritus herbui';
echo '<br>';
do {
    $moneta = rand(0, 1);
    echo $moneta . ' ';
} while($moneta);
echo '<br>';
echo 'Tris kartus iškritus herbui';
echo '<br>';
$count = 0;
do {
    $moneta = rand(0, 1);
    if (!$moneta) {
        echo $moneta . ' ';
        $count += 1;
    } else {
        echo $moneta . ' ';
    }
} while($count < 3);
echo '<br>';
echo 'Tris kartus iš eilės iškritus herbui';
echo '<br>';

$arr = [];
$run = true;

do {
    $moneta = rand(0, 1);
    array_push($arr, $moneta);
    echo $moneta . ' ';
    for($i=0; $i<count($arr); $i++) {
        if (isset($arr[$i-1]) && isset($arr[$i-2])) {
            if(!$arr[$i] && !$arr[$i-1] && !$arr[$i-2]) {
                break 2;
            }
        }
    }
} while($run);

echo '<br>';
echo '7) -------------------------------------------';
echo '<br>';
// Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį 
// nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. 
// Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. 
// Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų.
$name1 = 'Kazys';
$name2 = 'Petras';
$kazysPoints = 0;
$petrasPoints = 0;

while(true) {
    $kazysPoints += rand(10, 20);
    $petrasPoints += rand(5, 25);
    if ($kazysPoints >= 222) {
        echo '<br>';
        echo 'Partiją laimėjo : ' . $name1;
        echo '<br>';
        break;
    }
    if ($petrasPoints >= 222) {
        echo '<br>';
        echo 'Partiją laimėjo : ' . $name2;
        echo '<br>';
        break;
    }
}
echo $name1 . ' - ' . $kazysPoints . ' taškai(ų)';
echo '<br>';
echo $name2 . ' - ' . $petrasPoints . ' taškai(ų)';

echo '<br>';
echo '8) -------------------------------------------';
echo '<br>';
echo '<br>';

// Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą 
// (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo 
// žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).

$star = '';
$limit = 11;
$space = $limit;

for ($i = 1; $i <= $limit; $i++) {
    for ($j = 1; $j <= $space; $j++) {
        echo '<p style="display: inline-block; margin: 0; height: 20px; width: 20px; color: black"> </p>';
    }
    $space--;

    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        $rgb1 = rand(1, 255);
        $rgb2 = rand(1, 255);
        $rgb3 = rand(1, 255);
        echo "<p style=\"display: inline-block; margin: 0; height: 20px; width: 20px; color: rgb($rgb1, $rgb2, $rgb3);\">*</p>";
    }

    echo "<br>";
}

$space = 2;

for ($i = 1; $i <= $limit; $i++) {
    for ($j = 1; $j <= $space; $j++) {
        echo '<p style="display: inline-block; margin: 0; height: 20px; width: 20px; color: black"> </p>';
    }
    $space++;

    for ($j = 1; $j <= 2 * ($limit - $i) - 1; $j++) {
        $rgb1 = rand(1, 255);
        $rgb2 = rand(1, 255);
        $rgb3 = rand(1, 255);
        echo "<p style=\"display: inline-block; margin: 0; height: 20px; width: 20px; color: rgb($rgb1, $rgb2, $rgb3);\">*</p>";
    }

    echo "<br>";
}

echo '9) -------------------------------------------';
echo '<br>';
// Panaudokite funkciją microtime(). Paskaičiuokite kiek sekundžių užtruks kodą:
// $c = "10 bezdzioniu suvalge 20 bananu.";
// Įvykdyti 1 milijoną kartų ir palyginkite kiek užtruks įvykdyti kodą: 
// $c = '10 bezdzioniu suvalge 20 bananu.';
// (Stringas viengubose ir dvigubose kabutėse)

$start = microtime(true);
for($i = 0; $i < 1000000; $i++) {
    $c = "10 bezdzioniu suvalge 20 bananu.";
}
$end = microtime(true);
echo 'Su dvigubom kabutėm užtruko - ' . round($end - $start, 3) . ' sekundžių';
echo '<br>';
$start1 = microtime(true);
for($i = 0; $i < 1000000; $i++) {
    $c = '10 bezdzioniu suvalge 20 bananu.';
}
$end1 = microtime(true);

echo 'Su viengubom kabutėm užtruko - ' . round($end1 - $start1, 3) . ' sekundžių';

echo '<br>';
echo '10) -------------------------------------------';
echo '<br>';

// Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. 
// Vinies ilgis 8.5cm (pilnai sulenda į lentą).
// “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
// “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė 
// (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. 
// Suskaičiuokite kiek reikia smūgių.

$viniesIlgis = 85;
$smugiai = 0;
$sukalta = 0;
$counter = 85;

while(true) {
    if($sukalta >= 425) {
    break;
    } else {
        if($sukalta >= $counter) {
            $sukalta = $counter;
            $counter += 85;
        } else {
            $smugiai += 1;
            $sukalta += rand(5, 20);
        }
    }  
}

echo '<br>';
echo 'Kalant mažais smūgiais 5 vinis sukalam per ' . $smugiai . ' smūgius';
echo '<br>';

$viniesIlgis = 85;
$smugiai = 0;
$sukalta = 0;
$counter = 85;

while(true) {
    if($sukalta >= 425) {
    break;
    } else {
        if($sukalta >= $counter) {
            $sukalta = $counter;
            $counter += 85;
        } else {
            $smugiai += 1;
            if(rand(1,10) > 5) {
                $sukalta += rand(20, 30);
            }
        }
    }  
}
echo '<br>';
echo 'Kalant dideliais smūgiais 5 vinis sukalam per ' . $smugiai . ' smūgius';
echo '<br>';

echo '<br>';
echo '11) -------------------------------------------';
echo '<br>';

// Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais. 
// Skaičiai turi būti unikalūs (t.y. nesikartoti). Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami 
// jame tik pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs). 
// Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.

$strArr = [];
$strArr2 = [];

while(count($strArr) < 50) {
    $sk = rand(1, 200);
    $unique = true;
    foreach($strArr as $element) {
        if($sk == $element) {
            $unique = false;
            break;
        } 
    }
    if($unique) {
        array_push($strArr, $sk);
    }
}

$stringas = implode(' ', $strArr);

echo "Pirmas stringas (unikalūs skaičiai): $stringas";
echo '<br>';
for($i=0; $i<count($strArr); $i++) {
    $num = $strArr[$i];
    $check = true;
    for($j=2; $j < $num; $j++) {
        if($num % $j == 0) {
            $check = false;
            break;
        }
    }
    if($check) {
        array_push($strArr2, $strArr[$i]);
    }
}
asort($strArr2);
echo '<br>';
$pirminiai = implode(' ', $strArr2);
echo "Antras stringas (pirminiai skaičiai): $pirminiai";
echo '<br>';