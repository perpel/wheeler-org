<?php
namespace common\widgets;

use Yii;
use yii\helpers\Html;

class Services extends \yii\bootstrap\Widget {

	public $services = [];
	public $type = 'home';

	public function init() {
		parent::init();
	}

	public function run() {
		switch ($this->type) {
			case 'home':
				$this->homeServices();
				break;
		}
	}

	protected function homeServices() {
		$this->services = Yii::t('app', 'homeServices');
		echo Html::tag('h3', $this->services['h3'] . Html::tag('label', ' '));
		echo Html::tag('div',
			Html::ul($this->services['items'], ['item' => function($item, $index) {
		        return Html::tag(
		            'li',
		            Html::a(
		            	Html::tag('span', ' ', ['class'=>$item['icon']]) . 
		            	Html::tag('label', $item['label']), 
		            	[$item['url']])
		        );
		    }, 'class' => 'list-unstyled list-inline']),
			['class' => 'services-list text-center']
		);
	}

}