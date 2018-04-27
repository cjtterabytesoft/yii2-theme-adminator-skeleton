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
*      @view: site[Signup]
*     @since: 1.0
**/

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

?>

<?= Html::beginTag('div', ['class' => 'peers ai-s fxw-nw h-100vh']) ?>
    <?= Html::beginTag('div', ['class' => 'peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv',
        'style' => 'background-image: url("/images/logos/bg.jpg']) ?>
        <?= Html::beginTag('div', ['class' => 'pos-a centerXY']) ?>
            <?= Html::beginTag('div', ['class' => 'bgc-white bdrs-50p pos-r', 
                'style' => 'width: 120px; height: 120px;']) ?>
                <?= Html::img('/images/logos/logo.png', $options = ['class' => 'pos-a centerXY', 'alt' => '']) ?>
            <?= Html::endTag('div') ?>
        <?= Html::endTag('div') ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r',
        'style' => 'min-width: 320px;']) ?> 
        <?= Html::tag('h4', 'Register', ['class' => 'fw-300 c-grey-900 mB-40']) ?>
        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= Html::beginTag('div', ['class' => 'form-group']) ?>
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            <?= Html::endTag('div') ?>
        <?php ActiveForm::end(); ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>