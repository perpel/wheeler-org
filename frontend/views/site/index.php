<?php

use yii\helpers\Html;
use common\widgets\Banner;
use common\widgets\About;
use common\widgets\Services;
use common\widgets\Protfolio;
use common\widgets\RegisterJS;

$this->title = Yii::t("app", "titleHome");

RegisterJS::widget(['view' => $this,'types'=>['slider', 'filter']]);

?>

<!--start-slider-->
<div class="slider">
<!-- Slideshow -->
<?= Banner::widget(['type'=>'home'])?>   
</div>
<!--//End-slider-->

<!--start-about-->
<div id="about" class="about">
    <div class="container">
      <?= About::widget(['type'=>'home'])?>
    </div>
<!--//End-about-->

<!----start-services---->
<div id="services" class="services">
  <div class="container">
    <?= Services::widget(['type'=>'home'])?>
  </div>
</div>
<!----//End-services---->

<!--start-portfolio-->
<div id="port" class="portfolio portfolio-box">
  <div class="container">
    <?= Protfolio::widget(['type'=>'home'])?>
  </div>
</div>
<!--//End-portfolio-->