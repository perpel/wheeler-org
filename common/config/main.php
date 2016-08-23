<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'i18n' => [ 
			'translations' => [ 
				'app' => [ 
					'class' => 'yii\i18n\PhpMessageSource', 
					'basePath' => '@common/components/language', 
					'fileMap' => [
						 'app' => 'app.php', 
						 'app/error' => 'error.php', 
					],
				],
				// 'product' => [ 
					// 'class' => 'yii\i18n\PhpMessageSource', 
					// 'basePath' => '@common/messages',
					// 'fileMap' => [
						 // 'app' => 'product.php', 
					// ],
				// ],
			],
		],
    ],
];
