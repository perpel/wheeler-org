<?php
namespace common\widgets;

use Yii;
use yii\helpers\Html;

class Protfolio extends \yii\bootstrap\Widget {

	public $protfolio = [];
	public $type = 'home';

	public function init() {
		parent::init();
	}

	public function run() {
		switch ($this->type) {
			case 'home':
				$this->homeProtfolio();
				break;
		}
	}

	protected function homeProtfolio() {
		$this->protfolio = Yii::t('app', 'homeProtfolio');
		echo Html::tag('h3', $this->protfolio['h3'] . Html::tag('label', ' '));
		echo Html::beginTag('div', ['class'=>'container portfolio-main']);
		echo Html::ul($this->protfolio['menus'], ['item'=>function($item, $index){
			if ($index == 0) {
				return Html::tag(
					'li',
					Html::tag('span', 
						$item['span'], 
						[
							'class'=>'filter active', 
							'data-filter'=>'app card icon logo web'
						]) . ' / '
				);
			} else {
				return Html::tag(
					'li',
					Html::tag('span', 
						$item['span'], 
						[
							'class'=>'filter', 
							'data-filter'=>$item['filter']
						]) . ' / '
				);
			}
					
		}, 'id'=>'filters', 'class'=>'clearfix']);
		echo $this->homeItems();
		echo Html::endTag('div');
		echo Html::tag('div', ' ', ['class'=>'clearfix']);
	}

	protected function homeItems() {

		echo Html::beginTag('div', ['id'=>'portfoliolist']);
		
		foreach ($this->protfolio['items'] as $key => $item) {

			echo Html::beginTag('div', ['class'=>'portfolio ' . $item['catClass'] . ' mix_all', 
										'data-cat'=>$item['cat'], 
										'style'=>'display: inline-block; opacity: 1;'
			]);

			echo Html::tag('div',
						Html::a(
							Html::img('./images/p1.jpg', ['class'=>'p-img']) . 
							Html::tag('div', 
									Html::tag('h2', Html::img('./images/link-ico.png'),
									['class'=>'b-animate b-from-left b-delay03']),
							['class'=>'b-wrapper']), 
							'#', 
							['data-toggle'=>'modal', 
							'data-target'=>'.bs-example-modal-md', 
							'class'=>'b-link-stripe b-animate-go thickbox'
							]),
					['class'=>'portfolio-wrapper']);

			echo Html::tag('div', 
						Html::tag(
							'h4', 
							Html::a(' ' . $item['portH4'], '#')) .  
							Html::tag('span', $item['portSpan']), 
					['class'=>'port-info']);


			echo Html::endTag('div');

		}

		echo Html::endTag('div');
	}

}