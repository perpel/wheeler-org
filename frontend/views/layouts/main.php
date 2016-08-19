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
            <a href="#"><img src="./images/logo.png" title="Blue agency" /></a>
        </div>
        <!---- //End-logo---->
        <!----start-top-nav---->
         <nav class="top-nav">
            <ul class="top-nav">
                <li class="active"><a href="#home" class="scroll">Hello!</a></li>
                <li class="page-scroll"><a href="#about" class="scroll">About</a></li>
                <li class="page-scroll"><a href="#services" class="scroll">Services</a></li>
                <li class="page-scroll"><a href="#port" class="scroll">Protfolio</a></li>
                <li class="page-scroll"><a href="#blog" class="scroll">Blog</a></li>
                <li class="page-scroll"><a href="#team" class="scroll">Team</a></li>
                <li class="page-scroll"><a href="#contact" class="scroll">Contact</a></li>
            </ul>
            <a href="#" id="pull"><img src="./images/nav-icon.png" title="menu" /></a>
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
