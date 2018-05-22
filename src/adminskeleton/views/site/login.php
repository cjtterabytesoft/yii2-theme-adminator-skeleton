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

use himiklab\yii2\recaptcha\ReCaptcha;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$this->title = 'Login';
$this->params['breadcrumbs_theme'][] = $this->title;

?>

<?= Html::beginTag('div', ['class' => 'peers ai-s fxw-nw h-100vh']) ?>
	<?= Html::beginTag('div', ['class' => 'd-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv',
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
		<?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs_theme']) ?
			$this->params['breadcrumbs_theme'] : []]) ?>         
		<?= Html::tag('h4', 'Login', ['class' => 'fw-300 c-grey-900 mB-40']) ?>
		<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
			<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
			<?= $form->field($model, 'password')->passwordInput() ?>
			<?= $form->field($model, 'rememberMe')->checkbox() ?>
			<?= $form->field($model, 'reCaptcha')->widget(\himiklab\yii2\recaptcha\ReCaptcha::class) ?>
			<?= Html::beginTag('div', ['style' => 'color:#999;margin:1em 0']) ?>
				If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
			<?= Html::endTag('div') ?>
			<?= Html::beginTag('div', ['class' => 'form-group']) ?>
				<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
			<?= Html::endTag('div') ?>
		<?php ActiveForm::end(); ?>
	<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>