<?php 
return [ 
    'client_id' => env('PAYPAL_CLIENT_ID','AeCEW713NpAHT8CU5xabrZ9lvGrIJyGx02WcYfh0n8lB08FOPVbmFkf4RTk46-D59nGL95peJ4xqWmBK'),
    'secret' => env('PAYPAL_SECRET','EO4L2qLydQkYLu5vAP8E81PXVM2bM5go5iwwMSfnEV4TwsBknIFFU2DI-GaZW8j4DnWYgLnPU3mkj3hz'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];