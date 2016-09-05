<?php
namespace common\widgets;

use Yii;
use yii\helpers\Html;

class RegisterJS extends \yii\bootstrap\Widget {

	public $view;
	public $types = [];

	public function init() {
		parent::init();
	}

	public function run() {
		if ($this->types) {
			foreach ($this->types as $type) {
				call_user_func_array(['\common\widgets\RegisterJS', $type],[]);
			}
		}
	}

	protected function slider() {
		$this->view->registerJsFile("@web/js/responsiveslides.min.js", [
		  'depends'=> [\yii\web\YiiAsset::className()]
		]);

		$sliderJS = <<<JS
		  $("#slider3").responsiveSlides({
		    manualControls: '#slider3-pager',
		  });
JS;
		echo $this->view->registerJs($sliderJS);
	}

	protected function filter() {
		$this->view->registerJsFile("@web/js/jquery.mixitup.min.js", [
		  'depends'=> [yii\web\YiiAsset::className()]
		]);

		$filterJs = <<<JS
		  var filterList = {
		    init: function () {
		      // MixItUp plugin
		      // http://mixitup.io
		      $('#portfoliolist').mixitup({
		        targetSelector: '.portfolio',
		        filterSelector: '.filter',
		        effects: ['fade'],
		        easing: 'snap',
		        // call the hover effect
		        onMixEnd: filterList.hoverEffect()
		      });       
		    },
		    hoverEffect: function () {
		      // Simple parallax effect
		      $('#portfoliolist .portfolio').hover(
		        function () {
		          $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
		          $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');       
		        },
		        function () {
		          $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
		          $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');               
		        }   
		      );        
		    }
		  };
		  // Run the show!
		  filterList.init();
JS;
		echo $this->view->registerJs($filterJs);
	}

}