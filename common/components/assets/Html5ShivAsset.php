<?php


namespace common\components\assets;

use yii\web\AssetBundle;

class Html5ShivAsset extends AssetBundle {

    public $sourcePath = '@bower/html5shiv/dist';
	public $jsOptions = ['condition' => 'lte ie 8'];
    public $js = [
        'html5shiv.js',
    ];
}
