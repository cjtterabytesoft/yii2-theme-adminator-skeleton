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
*      @view: site[Login]
*     @since: 1.0
**/

use cjtterabytesoft\theme\adminskeleton\assets\adminator\AdminatorAsset;
use cjtterabytesoft\theme\adminskeleton\assets\custom\StyleAsset;
use cjtterabytesoft\theme\adminskeleton\widgets\Alert;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AdminatorAsset::register($this);
StyleAsset::register($this);

?>

<?= Html::beginTag('div', ['class' => 'peers ai-s fxw-nw h-100vh']) ?>
    <?= Html::beginTag('div', ['class' => 'd-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv',
        'style' => 'background-image: url("/images/logos/bg.jpg']) ?>
        <?= Html::beginTag('div', ['class' => 'pos-a centerXY']) ?>
            <?= Html::beginTag('div', ['class' => 'bgc-white bdrs-50p pos-r', 
                'style' => 'width: 120px; height: 120px;']) ?>
                <img class="pos-a centerXY" src="/images/logos/logo.png" alt="">
            <?= Html::endTag('div') ?>
        <?= Html::endTag('div') ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r',
        'style' => 'min-width: 320px;']) ?>    
        <h4 class="fw-300 c-grey-900 mB-40">Login</h4>
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= $form->field($model, 'rememberMe')->checkbox() ?>
            <div style="color:#999;margin:1em 0">
                If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
            </div>
            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        <?php ActiveForm::end(); ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>