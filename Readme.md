1.kodėl: Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1') yra 6?

Rezultatas yra 6, nes funkcija priima tik "integer" tipo parametrus. Jeigu į funkciją paduodamas kitokio tipo parametras, tada jis konvertuojamas į "integer" tipą.
Šiuo atveju antrasis parametras 2.2 yra "float" tipo ir konvertavus jį į integer tipą gauname reikšmę 2.


2. kas ir kodėl nutiko bandant kviesti: Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’);

Kviečiant šią funkciją nesuveikė declare(strict_types=1), todėl funkcija priėmė parametrus, kurie nebuvo "Integer" tipo. Taip nutiko todėl, kad faile, kuriame buvo iškviesta funkcija, nebuvo nurodyta, jog kintamųjų tipai yra griežti. 
