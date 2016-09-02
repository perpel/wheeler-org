<?php
namespace common\widgets;

use Yii;
use yii\helpers\Html;

class Nav extends \yii\bootstrap\Widget {
	// ********************************
	public function run() {

        echo Html::ul(Yii::t("app", "nav"), ['item' => function($item, $index) {
	        $options = ['class' => 'page-scroll'];
	        if ($item['active']) {
	            Html::removeCssClass($options, 'page-scroll');
	            Html::addCssClass($options, 'active');
	        }
	        return Html::tag(
	            'li',
	            Html::a($item['title'], [$item['url']], ['class' => 'scroll']),
	            $options
	        );
	    }, 'class' => 'top-nav']);

	    echo Html::a(Html::img(
	    	Yii::getAlias('@web') . "/images/nav-icon.png", 
	    	['alt' => 'toggle']
	    	),
	    	'#',
	    	['id'=>'pull']
	    );

        echo Html::tag('div', '', ['class'=>'clearfix']);

	}
}