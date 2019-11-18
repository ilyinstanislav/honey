<?php

/* @var $this View */

/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\web\View;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="top_block black">
    <div class=" logo"><a href="/"><img src="/images/logo.png"></a></div>
</div>

<?php echo $content ?>

<div class="bottom_block black col-xs-12">
    <a class="bottom_link" href="/"><img src="/images/logo.png"></a>
    <div class="social_icon"><a href="/"><img src="/images/f.png"></a></div>
    <div class="social_icon m-0"><a href="/"><img src="/images/vk.png"></a></div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
