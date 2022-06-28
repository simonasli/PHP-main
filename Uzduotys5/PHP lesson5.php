<?php


// Visur sudėkite reikiamus parametrų bei return tipus

/*
1. Parašykite funkciją 'dividesBy5', kuri priimtų int tipo skaičių ir grąžintų jo dalybos iš 5 liekaną.
*/
///////////////////////////////////
//function divideBy5 ($x) {
//    $number = $x % 5;
//    var_dump($number);
//}
//divideBy5(3);
/////////////////////////////////////
/*
2. Parašykite funkciją 'arrayPrinter', kuri priimtų array tipo parametrą ir
išspausdintų kiekvieną masyvo elementą naujoje eilutėje.
Funkcijos kvietimas: arrayPrinter(['some text', 'another text'])
Funkcija grąžina: funkcija nieko negrąžina - ji tik išspausdina masyvą į terminalą:
'some text'
'another text'
...
*/
///////////////////////////////////////

//function arrayPrinter (array $text):void
//{
//    foreach ($text as $a) {
//        echo $a. PHP_EOL;
//    }
//}
//arrayPrinter(["some text", "very good text"]);
//////////////////////////////////////////
/*
3. Parašykite funkciją 'stringEnhancer', kuri grąžintų pakeistą tekstą.
Funkcijos kvietimas: stringEnhancer('some text', '##')
Funkcija grąžina: '##some text##'
Funkcijos kvietimas: stringEnhancer('some text')
Funkcija grąžina: '**some text**'
*/

//
//function stringEnhancer ($text, $symbol = null) {
//    if ($symbol !== null) {
//        echo ($symbol . $text . $symbol);
//    } else {
//        echo "**" . $text . "**";
//    }
//}
//stringEnhancer("Labas", "##");
//

/*
4. Parašykite funkciją 'stringModifier', kuri pamodifikuotų paduotą string tipo kintamąjį.
Funkcijos kvietimas:
$x = 'some text';
stringModifier($x, '##');
echo $x; // '##some text##'
Funkcija grąžina: funkcija nieko negrąžina
*/

//function stringModifier(string &$x, $text="##"):string
//{
//    $x = $text . $x . $text;
//    return $x;
//}
//$x = "sometext";
//echo $x;
//stringModifier($x);
//echo $x;



/*
4. Parašykite funkciją 'textReplicator', kuri grąžintų 'padaugintą' tekstą.
Funkcijos kvietimas:
textReplicator('some_text', 3);
Funkcija grąžina: 'some_text-some_text-some_text'
Funkcijos kvietimas:
textReplicator('some_text', null);
Funkcija grąžina: 'some_text'
*/

function textReplicator (string $text,int $timer) {
    $i = 1;
    if ($i = 1) {
        echo $text;
    }
    while ($i < $timer) {
        echo "-" . $text;
        $i++;
    }
}

textReplicator("Labas", 6);



/*
4. Paverskite funkciją 'textReplicator', į veikiančią anoniminę funkciją.
*/