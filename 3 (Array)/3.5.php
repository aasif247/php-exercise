<?php

$foods = [
    'vegetables' =>explode(',','carrot,tomato,potato'),
    'fruits' =>explode(',','mango,banana,apple'),
    'drinks' =>explode(',','sprite,coke,drinko')
];

array_push($foods['drinks'],'mango');

// print_r($foods);

echo $foods['vegetables'][2];

$gadget = [
    'headphone' =>[
        'wired'=>[
            'Uiisii Hm13',
            'QKZ Dm10',
            'UiiSii C100'=>[
                '100',
                '200',
                '300'=>[
                    '1',
                    '2',
                    '3'
                ]
            ],
        ]
    ]
];

// print_r($gadget);
// echo $gadget[0][0][2][2][1]; // doesn't work
echo $gadget ['headphone'] ['wired'] ['UiiSii C100'] ['300'] [0];

$sample1 = [
    [1,2,3,4,],
    [11,22,33,44,],
    [111,222,333,444,],
    [1111,2222,[5,6,7,8],4444,],
];

// echo $sample1[3][2][3];

$sample2 = [
    'asif'=> [1,2,3,4,],
    'arif'=>[11,22,33,44,],
    'mozahid'=>[111,222,333,444,],
    'musaib'=>[1111,2222,'nmbr'=>[5,6,7,8],4444,],
];

echo $sample2['musaib'][2][2];
