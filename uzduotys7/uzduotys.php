<?php

declare(strict_types=1);

function getCities(): array
{
    return [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        [
            'name' => 'Delhi',
            'population' => 29399141,
        ],
        [
            'name' => 'Shanghai',
            'population' => 26317104,
        ],
        [
            'name' => 'Sao Paulo',
            'population' => 21846507,
        ],
        [
            'name' => 'Mexico City',
            'population' => 21671908,
        ],
        [
            'name' => 'New York',
            'population' => 25000000,
        ],
    ];
}

//function exercise1(): int
//{
//    /*
//    Suskaičiuokite bendrą miestų populiaciją pasinaudodami paprastu 'foreach' ir grąžinkite ją iš funkcijos.
//    Miestus pasiimkite iškvietę funkciją 'getCities'
//    */
//    $allPopulation = getCities();
//    foreach ($allPopulation as $key => $value){
//        $sum += $value['population'];
//    }
//    return $sum;
//
//}
//var_dump(exercise1());
//function exercise2(): int
//{
//    /*
//    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcijomis array_column ir array_sum
//    ir grąžinkite ją iš funkcijos
//    */
//    $population = getCities();
//    $allPopulation = array_column($population, 'population');
//
//    return array_sum($allPopulation);
//}
//var_dump(exercise2());
//
//function exercise3(): int
//{
//    /*
//    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcija array_reduce ir grąžinkite ją iš funkcijos
//    */
//    $pop = getCities();
//    $totalPop = array_reduce(
//        $pop, function(int $sum, array$city) {
//            $sum += $city['population'];
//            return $sum;
//    },0
//
//    );
//    return $totalPop;
//}
//var_dump(exercise3());
//function exercise4(): int
//{
//    /*
//    Suskaičiuokite populiaciją miestų, kurie yra didesni nei 25,000,000 gyventojų.
//    Rinkites sau patogiausią skaičiavimo būdą.
//    */
//    $pop = getCities();
//    $sum = 0;
//    foreach ($pop as $key => $value){
//        if ($value['population'] > 25000000)
//        $sum += $value['population'];
//    }
//    return $sum;
//
//
//}
//var_dump(exercise4());
//
//function exercise5(): array
//{
//    /*
//    Grąžinkite masyvą, kuriame būtų tik tie miestai, kurie yra didesni nei 25,000,000 gyventojų
//    Rezultatas turi būti tokios pat struktūros, kaip ir pradinis miestų masyvas:
//    [
//        [
//            'name' => 'Tokyo',
//            'population' => 37435191,
//        ],
//        ...
//    ]
//    */
//
//    $cities = getCities();
//    $bigCities = array_filter(
//        $cities,
//        function(array $cities){
//            if($cities['population']>25000000){
//                return true;
//            }
//        }
//    );
//
//
//    return $bigCities;
//}
//var_dump(exercise5());
//
function exercise6(): int
{

    /*
    Suskaičiuokite ir grąžinkite bendrą užsakymo sumą.
    Prekėms, kurių pavadinimai nurodyti masyve $lowPriceItems, taikykite kainą 'priceLow'.
    Kitoms prekėms taikykite kainą 'priceRegular'.
    Bandykite panaudoti array_* funkcijas.
    */

    $lowPriceItems = ['t-shirt', 'shoes'];

    $orderItems = [
        [
            'name' => 't-shirt',
            'priceRegular' => 15,
            'priceLow' => 13,
            'quantity' => 3,
        ],
        [
            'name' => 'coat',
            'priceRegular' => 74,
            'priceLow' => 60,
            'quantity' => 6,
        ],
        [
            'name' => 'shirt',
            'priceRegular' => 25,
            'priceLow' => 20,
            'quantity' => 2,
        ],
        [
            'name' => 'shoes',
            'priceRegular' => 115,
            'priceLow' => 100,
            'quantity' => 1,
        ],
    ];

    $newArray = array_merge($orderItems, $lowPriceItems);
    $modifiedArray = array_reduce(
        $newArray,
        function (int $sum, array $orderItem) {
        $newArray = [];
            var_dump($orderItem);
            $sum = 12;
            return 0;
        }
    );

    return 0;
}

var_dump(exercise6());


//
//$newArray = [];
//foreach ($orderItems as $orderItem) {
//    if ($orderItem['name'] === $lowPriceItems[0] || $orderItem['name'] === $lowPriceItems[1]) {
//        $newArray[] = [
//            'name' => $orderItem['name'],
//            'price' => $orderItem['priceLow'],
//            'quantity' => $orderItem['quantity']
//        ];
//    } else {
//        $newArray[] = [
//            'name' => $orderItem['name'],
//            'price' => $orderItem['priceRegular'],
//            'quantity' => $orderItem['quantity']
//        ];
//    }
//}
//$modifiedArray = array_reduce(
//    $newArray,
//    function ($sum, $orderItem) {
//        $sum += $orderItem['price']*$orderItem['quantity'];
//        return $sum;
//    }
//);
//return $modifiedArray;



