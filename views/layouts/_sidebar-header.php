<?php

/**
* This file is part of the CJTTERABYTESOFT yii2-theme-adminator-skeleton
*
* (c) CJT TERABYTE LLC yii2-theme-adminator-skeleton <http://gitlab.com/cjtterabytesoft>
* For the full copyright and license information, please view the LICENSE.md
* file that was distributed with this source code
*
*      @link: http://www.tusoporte.net
*    @author: Wilmer Arámbula <cjtterabytellc@gmail.com>
* @copyright: (c) CJT TERABYTE LLC
*     @theme: [yii2-theme-adminator-skeleton]
*      @view: layout[_Sidebar_Header]
*     @since: 1.0
**/

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!- SIDEBAR-HEADER -!>
<?= Html::begintag('div', ['class' => 'sidebar-logo']) ?>
    <?= Html::begintag('div', ['class' => 'peers ai-c fxw-nw']) ?>
        <?= Html::begintag('div', ['class' => 'peer peer-greed']) ?>
            <?= Html::begintag('a', ['class' => 'sidebar-link td-n', 'href' => Yii::$app->homeUrl]) ?>
                <?= Html::begintag('div', ['class' => 'peers ai-c fxw-nw']) ?>
                    <?= Html::begintag('div', ['class' => 'peer']) ?>
                        <?= Html::begintag('div', ['class' => 'logo']) ?>
                            <?= Html::img('/images/logos/logo.png', $options = ['alt' => '']) ?>
                        <?= Html::endTag('div') ?>
                    <?= Html::endTag('div') ?>
                    <?= Html::begintag('div', ['class' => 'peer peer-greed']) ?>
                        <?= Html::tag('h5', html::encode(Yii::t('adminator','Adminator')),
                            ['class' => 'lh-1 mB-0 logo-text']) ?>
                    <?= Html::endTag('div') ?>
                <?= Html::endTag('div') ?>
            <?= Html::endTag('a') ?>
        <?= Html::endTag('div') ?>
        <?= Html::begintag('div', ['class' => 'peer']) ?>
            <?= Html::begintag('div', ['class' => 'mobile-toggle sidebar-toggle']) ?>
                <?= Html::begintag('a', ['class' => 'td-n', 'href'=>'']) ?>
                    <?= Html::begintag('i', ['class' => 'ti-arrow-circle-left']) ?>
                    <?= Html::endTag('i') ?>
                <?= Html::endTag('a') ?>
            <?= Html::endTag('div') ?>
        <?= Html::endTag('div') ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
<!- END - SIDEBAR-HEADER -!>