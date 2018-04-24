<?php

/**
* This file is part of the CJTTERABYTESOFT yii2-theme-adminator-skeleton
*
* (c) CJT TERABYTE LLC yii2-theme-adminator-skeleton
* For the full copyright and license information, please view the LICENSE.md
* file that was distributed with this source code
*
*      @link: https://github.com/cjtterabytesoft/yii2-theme-adminator-skeleton
*    @author: Wilmer Arámbula <cjtterabytellc@gmail.com>
* @copyright: (c) CJT TERABYTE LLC
*     @theme: [yii2-theme-adminator-skeleton]
*      @view: pages[404]
*     @since: 1.0
**/

use yii\helpers\Html;

?>

<!- 404 !->
<?= Html::beginTag('div', ['class' => 'pos-a t-0 l-0 bgc-white w-100 h-100 d-f fxd-r fxw-w ai-c jc-c pos-r p-30']) ?>
    <?= Html::beginTag('div', ['class' => 'mR-60']) ?>
        <?= html::img('/images/logos/404.png', $options = ['alt' => '#']) ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'd-f jc-c fxd-c']) ?>
        <?= Html::tag('h1', '404', ['class' => 'mB-30 fw-900 lh-1 c-red-500', 'style' => 'font-size: 60px;']) ?>
        <?= Html::tag('h3', 'Oops Map not Found.', ['class' => 'mB-10 fsz-lg c-grey-900 tt-c']) ?>
        <?= Html::tag('p', 'The Map yot are looking for does not exist or has been moved.', 
            ['class' => 'mB-30 fsz-def c-grey-700']) ?>
        <?= Html::beginTag('div') ?>
            <?= Html::a('Go to Home', Yii::$app->homeUrl, ['class' => 'btn btn-primary', 'type' => 'primary']) ?>
        <?= Html::endTag('div') ?>
    <?= Html::endTag('div') ?>
 <?= Html::endTag('div') ?>
 <!- END - 404 !->