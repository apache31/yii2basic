<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Yii2 Basic',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
    $nav_report=[
        ['label' => 'Hello First View', 'url' => ['/hello/first']],
        ['label' => 'Send 3x5 to view', 'url' => ['/anamai/test']],
        ['label' => 'รายงานสรุป', 'url' => ['/site/summary']]
    ];
    
    $nav_setting=[
        ['label' => 'ตั้งค่าพื้นฐาน', 'url' => ['/site/index2']],
        ['label' => 'ตั้งค่าการแสดงผล', 'url' => ['/site/index2']],
        ['label' => 'ฐานข้อมูล', 'url' => ['/site/index2']],
        ['label' => 'ผู้ใช้งาน', 'url' => ['/site/index2']]
    ];
    echo Nav::widget([
        'encodeLabels' => false,
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => '<span class="glyphicon glyphicon-home"></span> หน้าแรก', 'url' => ['/site/index']],
            ['label' => 'ทดสอบ', 'url' => ['/site/test']],
            ['label' => '<span class="glyphicon glyphicon-list-alt"></span> เพ็จ', 'items' => $nav_report],
            ['label' => '<span class="glyphicon glyphicon-cog"></span> ตั้งค่า', 'items' => $nav_setting],
            ['label' => 'เกี่ยวกับ', 'url' => ['/site/about']],
            ['label' => 'ติดต่อ', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; apache31 <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
