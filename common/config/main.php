<?php
return [
    'vendorPath' => (dirname(dirname(dirname(__DIR__)))) . '/trong_tre/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
