<?php

namespace common\components\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class Html5ForIEAsset extends AssetBundle
{
    public $depends = [
        'common\components\assets\RespondAsset',
        'common\components\assets\Html5ShivAsset',
    ];
	
}