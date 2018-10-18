1.kodėl: Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1') yra 6?

Rezultatas yra 6, nes funkcija priima tik "integer" tipo parametrus. Jeigu į funkciją paduodamas kitokio tipo parametras, tada jis konvertuojamas į "integer" tipą.
Šiuo atveju antrasis parametras 2.2 yra "float" tipo ir konvertavus jį į integer tipą gauname reikšmę 2.


2. kas ir kodėl nutiko bandant kviesti: Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’);

Šios funkcijos viduje buvo iškviesta kita funkcija, kuri priima tik INT tipo parametrus. Kadangi antras perduotas kintamasis yra float tipo, gauname kritinę klaidą, nes numatyta direktyva declare(strict_types=1) neleidžia į funkcijas perduoti kitokio tipo parametrų nei yra nurodyta, jeigu funkcija yra iškviesta tame pačiame faile. Jeigu ši funkcija būtų iškviesta tiesiogiai iš index.php (kur nera direktyvos declare(strict_types=1)), tada parametrai butu konvertuoti į sveikąjį skaičių. Duotuoju atveju float 2.2 butų konvertuotas į INT 2, o string '1' į INT 1.
