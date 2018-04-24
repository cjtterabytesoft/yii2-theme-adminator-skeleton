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
*      @view: layout[_Header]
*     @since: 1.0
**/

use yii\helpers\Html;

?>

<!- HEADER !->
<?php if (Yii::$app->user->isGuest): ?>
    <?= Html::a(\yii::$app->params['WebName'], \Yii::$app->homeUrl, ['class' => 'logo']) ?>
    <!- Header Navbar: style can be found in header.less !->
    <?= Html::beginTag('nav', ['class' => 'navbar-dark bg-dark navbar-expand-lg fixed-top navbar']) ?>
        <?= Html::beginTag('div', ['class' => 'container']) ?>
            <!- Add the class icon to your logo image or logo icon to add the margining !->
            <?= Html::beginTag('div', ['class' => 'navbar-header']) ?>
                <?= Html::a(\yii::$app->params['WebName'], \Yii::$app->homeUrl, ['class' => 'navbar-brand']) ?>
            <?= Html::endTag('div') ?>
            <?= Html::beginTag('div', ['id' => 'w0-collapse', 'class' => 'collapse navbar-collapse']) ?>
                <?= $this->render('_menu') ?>
            <?= Html::endTag('div') ?>    
        <?= Html::endTag('div') ?>
    <?= Html::endTag('nav') ?>
<?php endif; ?>
<!- END - HEADER !->