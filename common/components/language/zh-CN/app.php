<?php

return [
	
	"titleHome" => "首页",

	// 导航栏
	"nav" => [
		[
			"title" => "首页",
			"url" => "site/index",
			"active" => true,
		],
		[
			"title" => "关于我们",
			"url" => "about/index",
			"active" => false,
		],
		[
			"title" => "产品中心",
			"url" => "product/index",
			"active" => false,
		],
	],

	"homeAbout" => [
		'h2' => '惠勒科技',
		'label' => '我们是一个以',
		'span' => '机床, 工业机器人, 自动化, 智能工厂产品',
		'p' => '提供的产品包括标准机床设备、制造柔性单元、和特殊设备领域的机器人技术, 自动化交付在我们的集成平台上你可以选择到适合你的需求；造福我们的客户.我们每天都在使用我们有经验的员工和技术来提高你们产品的质量,实现更快的流程为我们的客户。',
		'items' => [
			'machine' => [
				'icon' => 'about-icon',
				'h3' => ['label' => '', 'a' => '机床'],
				'p' => '机床（英文名称：machine tool）是指制造机器的机器，亦称工作母机或工具机，习惯上简称机床。一般分为金属切削机床、锻压机床和木工机床等。',
			],
	        'robot' => [
	        	'icon' => 'about-icon1',
				'h3' => ['label' => '', 'a' => '工业机器人'],
				'p' => 'velit est, tempus in nulla sed, convallis porttitor lacus. Curabitur sed egestas eros. Donec convallis ligula eu diam elementum, quis tempor sem tincidunt.',
	        ],
	        'automation' => [
	        	'icon' => 'about-icon2',
				'h3' => ['label' => '', 'a' => '自动化'],
				'p' => 'velit est, tempus in nulla sed, convallis porttitor lacus. Curabitur sed egestas eros. Donec convallis ligula eu diam elementum, quis tempor sem tincidunt.',
	        ],
	        'corpartion' => [
	        	'icon' => 'about-icon3',
				'h3' => ['label' => '', 'a' => '智能工厂产品'],
				'p' => 'velit est, tempus in nulla sed, convallis porttitor lacus. Curabitur sed egestas eros. Donec convallis ligula eu diam elementum, quis tempor sem tincidunt.',
	        ],
		],
	],

	// home services
	'homeServices' => [
		'h3' => '工业机器人',
		'items' => [
			['icon'=>'service-icon', 'label' => 'X1000', 'url' => '#'],
			['icon'=>'service-icon1', 'label' => 'X1001', 'url' => '#'],
			['icon'=>'service-icon2', 'label' => 'X1002', 'url' => '#'],
			['icon'=>'service-icon3', 'label' => 'X1003', 'url' => '#'],
			['icon'=>'service-icon4', 'label' => 'X1004', 'url' => '#'],
			['icon'=>'service-icon5', 'label' => 'X1005', 'url' => '#'],
			['icon'=>'service-icon6', 'label' => 'X1006', 'url' => '#'],
		]
	],

	'homeProtfolio' => [
		'h3' => 'ADFDSA',
		'menus' => [
			['span'=>'APP', 'filter'=>'app'],
			['span'=>'Card', 'filter'=>'card'],
			['span'=>'ICON', 'filter'=>'icon'],
			['span'=>'LOGO', 'filter'=>'logo'],
		],
		'items' => [
			['portH4'=>'dasfa', 'portSpan'=>'dfdf', 'cat'=>'logo', 'catClass'=>'logo'],
			['portH4'=>'dasfa', 'portSpan'=>'dfdf', 'cat'=>'icon', 'catClass'=>'icon'],
			['portH4'=>'dasfa', 'portSpan'=>'dfdf', 'cat'=>'app', 'catClass'=>'app'],
		]
	],

];