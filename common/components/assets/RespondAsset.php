<?php

namespace common\components\assets;

use yii\web\AssetBundle;

class RespondAsset extends AssetBundle
{
    public $sourcePath = '@bower/respond/dest';
	public $jsOptions = ['condition' => 'lte ie 8'];
    public $js = [
        'respond.src.js',
    ];
}
