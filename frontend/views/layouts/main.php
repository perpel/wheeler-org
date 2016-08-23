<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	
</head>
<body>
<?php $this->beginBody() ?>

<?php

$pull = <<<JS
    var pull        = $('#pull');
        menu        = $('nav ul');
        menuHeight  = menu.height();
    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
    $(window).resize(function(){
        var w = $(window).width();
        if(w > 320 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
JS;
echo $this->registerJs($pull);
?>

<!----start-header---->
<div id="home" class="header scroll">
    <div class="container">
        <!---- start-logo---->
        <div class="logo">
            <a href="#"><img src="<?= Yii::getAlias('@web')?>/images/logo.png" title="Blue agency" /></a>
        </div>
        <!---- //End-logo---->
        <!----start-top-nav---->
        <nav class="top-nav">
        <?= Html::ul(Yii::t("app", "nav"), ['item' => function($item, $index) {
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
            }, 'class' => 'top-nav']) ?>
            
            <a href="#" id="pull"><img src="<?= Yii::getAlias('@web')?>/images/nav-icon.png" title="menu" /></a>
        </nav>
        <div class="clearfix"> </div>
        <!----//End-top-nav---->
    </div>
</div>
<!----//End-header---->

<?php $content ?>




<?= $this->registerJsFile('@web/js/html5-tags.js',[
	'position' => \yii\web\View::POS_HEAD, 
	'condition'=>'lt ie 9'])?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
