<?php
namespace common\widgets;

use Yii;
use yii\helpers\Html;

class About extends \yii\bootstrap\Widget {

	public $about = [];
	public $type = 'home';

	public function init() {
		parent::init();
	}

	public function run() {
		switch ($this->type) {
			case 'home':
				$this->homeAbout();
				break;
		}
	}

	protected function homeAbout() {
		$this->about = Yii::t('app', 'homeAbout');
		echo Html::tag('h2', $this->about['h2']);
		echo Html::tag('p', 
			Html::tag('label', $this->about['label']) .
			Html::tag('span', $this->about['span']),
			['class'=>'wellcome-note-head']
		);
		echo Html::tag('p', $this->about['p']);
		$this->homeAboutItems();
	}

	protected function homeAboutItems() {
		echo Html::beginTag('div', ['class' => 'about-grids']);
			foreach ($this->about['items'] as $item) {
				echo Html::tag(
					'div',
					Html::tag('span', ' ', ['class' => $item['icon']]) . 
					Html::tag('h3', Html::a(
						Html::tag('label', $item['h3']['label']) .
						' ' . $item['h3']['a'],
						'#'
						)
					) . 
					Html::tag('p', $item['p']),
					['class' => 'col-md-3 about-grid']
				);
			}
			echo Html::tag('div', '', ['class'=>'clearfix']);
		echo Html::endTag('div');
	}
}