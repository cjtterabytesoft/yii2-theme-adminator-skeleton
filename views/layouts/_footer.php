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
*      @view: layout[_Footer]
*     @since: 1.0
**/

use yii\helpers\Html;

?>

<!- FOOTER !->
<?= Html::beginTag('footer', ['class' => 'main-footer']) ?>
    <?= Html::beginTag('div', ['class' => 'container bdT ta-c p-30 fsz-sm c-grey-600']) ?>
        <?= Html::beginTag('div', ['class' => 'pull-left-custom']) ?>
            <?= Html::tag('span', '', ['class' => 'ico far fa-copyright fa-w-16 fa-2x align-middle']) ?>
            <?= Html::tag('span', '&nbsp' . \yii::$app->params['Author'], ['class' => 'align-middle']) ?>
        <?= Html::endTag('div') ?>			
        <?= Html::tag('span', 'POWERED BY: ', ['class' => 'align-middle d-none d-sm-inline']) ?>
        <?= html::img(\yii::$app->params['Logo-Yii'], ['class' => 'align-middle d-none d-sm-inline', 'style' => 'width:150px;']) ?>
        <?= Html::beginTag('div', ['class' => 'pull-right-custom  d-none d-sm-inline']) ?>
            <?= Html::tag('span', Yii::t('adminskeleton', 'SOCIAL NETWORKS:'), ['class' => 'hidden-xs align-middle','style' => 'padding-right: 5px']) ?>            
            <?= Html::a('', \yii::$app->params['Linkedin_Account'], ['class' => 'ico fab fa-github fa-w-16 fa-2x align-middle', 'target' => '_blank']) ?>   
            <?= Html::a('', \yii::$app->params['Facebook_Account'], ['class' => 'ico fab fa-linkedin-in fa-w-16 fa-2x align-middle', 'target' => '_blank']) ?>
            <?= Html::a('', \yii::$app->params['Twitter_Account'], ['class' => 'ico fab fa-twitter fa-w-16 fa-2x align-middle', 'target' => '_blank']) ?>   
			<?= Html::a('', \yii::$app->params['Twitter_Account'], ['class' => 'ico fab fa-google-plus-g fa-w-16 fa-2x align-middle', 'target' => '_blank']) ?>            
            <?= Html::a('', \yii::$app->params['Google_Account'], ['class' => 'ico fab fa-linkedin-in fa-w-16 fa-2x align-middle', 'target' => '_blank']) ?>                                   
        <?= Html::endTag('div') ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('footer') ?>
<!- END - FOOTER -!>
