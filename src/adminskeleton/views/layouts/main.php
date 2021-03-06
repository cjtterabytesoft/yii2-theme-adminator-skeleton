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
*      @view: layout[Main]
*     @since: 1.0
*       @yii: 2.1
**/

use cjtterabytesoft\theme\adminskeleton\assets\adminator\AdminatorAsset;
use cjtterabytesoft\theme\adminskeleton\assets\custom\StyleAsset;
use cjtterabytesoft\theme\adminskeleton\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AdminatorAsset::register($this);
StyleAsset::register($this);

?>

<!- @var $this \yii\web\View -!>
<!- @var $content string -!>

<!- ASSET BUNDLE -!>

<!- MAIN -!>
<!- BEGIN-PAGE -!>
<?php $this->beginPage() ?>
	<!DOCTYPE html>
	<!- HTML -!>
	<?= Html::beginTag('html', ['lang' => Yii::$app->language]) ?>
		<!- HEAD -!>
		<?= Html::beginTag('head') ?>
			<?= Html::tag('meta', '', ['charset' => Yii::$app->charset]) ?>
			<?= Html::tag('meta', '', ['content' => 'width=device-width, initial-scale=1, 
				shrink-to-fit=no', 'name' => 'viewport']) ?>
			<?= Html::csrfMetaTags() ?>
			<?= Html::tag('title', Html::encode(Yii::t('adminskeleton',$this->title))) ?>
			<!-- Theme style -->
			<?php $this->head() ?>
		<?= Html::endTag('head') ?>
		<!- END - HEAD -!>
		<?php $this->beginBody() ?>
			<!- BODY !->
			<?= Html::begintag('body', ['class' => 'app ' . yii::$app->params['AdminatorSkinFrontend']]) ?>
				<!- LOADER SCRIPT !->
				<?= Html::beginTag('div', ['id' => 'loader']) ?>
					<?= Html::beginTag('div', ['class' => 'spinner']) ?>
					<?= Html::endTag('div') ?>
				<?= Html::endTag('div') ?>
				<?php if (!Yii::$app->user->isGuest): ?>
					<!- DIV -!>
					<?= Html::beginTag('div') ?>
						<?= $this->render('_sidebar') ?>
						<!- PAGE-CONTAINER -!>
						<?= Html::beginTag('div', ['class' => 'page-container']) ?>
							<?= $this->render('_menuser') ?>
							<?= Html::beginTag('main', ['class' => 'main-content bgc-grey-100']) ?>
								<!- CONTENT !->
								<?= $content ?>
								<!- ALERT-WIDGET !->
								<?= Alert::widget()?>
							<?= Html::endTag('main') ?>
							<?= $this->render('_footer') ?>
						<?= Html::endTag('div') ?>
						<!- END - PAGE-CONTAINER -!>
					<?= Html::endTag('div') ?>
					<!- END - DIV -!>
					<?php else: ?>
						<!- SECTION !->
						<?= Html::beginTag('wrapper', ['class' => 'd-flex flex-column']) ?>
							<?php if ((Yii::$app->controller->action->id !== 'signup') && 
								(Yii::$app->controller->action->id !== 'login')): ?>
								<?= $this->render('_menu') ?>
							<?php endif; ?>    
							<?= Html::beginTag('main', ['class' => ((Yii::$app->controller->action->id == 'signup') || 
								(Yii::$app->controller->action->id == 'login')) ? 'container-fluid flex-fill' 
								: 'container flex-fill']) ?>
								<!- WIDGET-BREADCRUMBS !->
								<?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ?
									$this->params['breadcrumbs'] : []]) ?>
								<!- SECTION-CONTENT !->
								<?= Html::beginTag('section', ['class' => 'content']) ?>
									<!- CONTENT !->
									<?= $content ?>
									<!- ALERT-WIDGET !->
									<?= Alert::widget()?>
								<?= Html::endTag('section') ?>
								<!- END - SECTION-CONTENT !->
							<?= Html::endTag('main') ?>        
							<?= $this->render('_footer') ?>    							
						<?= Html::endTag('wrapper') ?>
						<!- END - SECTION !->                    
				<?php endif; ?>
			<?= Html::endTag('body') ?>
			<!- END - BODY -!>
		<?php $this->endBody() ?>
	<?= Html::endTag('html') ?>
	<!- END - HTML -!>
<?php $this->endPage() ?>
<!- END - BEGIN-PAGE -!>
<!- END - MAIN -!>