<?php
namespace common\widgets;

use Yii;
use yii\helpers\Html;

class Banner extends \yii\bootstrap\Widget {

	public $banner = [];
	public $type = 'home';

    public function run() {
    	$this->banner = Yii::t("banner", $this->type);
    	switch ($this->type) {
    		case 'home':
    			$this->home();
    			break;
    	}
    }

    protected function home() {
    	echo Html::ul($this->banner, ['item' => function($item, $index) {
            return Html::tag(
                'li',
                Html::img(
                  Yii::$app->request->hostinfo . '/uploads/banner/' . $item['img'], 
                  ['alt' => $item['alt']]) . 
                Html::tag('div',
                '<h1>' . $item['h1'] . '</h1>' . '<p>' . $item['p'] . '</p>', 
                ['class' => 'slid-info'])
            );
        }, 'class' => 'rslides', 'id' => 'slider3']);

        echo Html::ul($this->banner, ['item' => function($item, $index) {
        	return Html::tag(
                'li',
                Html::a(Html::tag('span', ' '), '#')
            );
        }, 'id' => 'slider3-pager']);
    }

}
