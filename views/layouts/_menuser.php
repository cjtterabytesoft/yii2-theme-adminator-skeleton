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
*      @view: layout[_Menuser]
*     @since: 1.0
**/

use cjtterabytesoft\theme\adminskeleton\widgets\MainSidebar;
use yii\bootstrap4\Nav;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<!- MENUSER !->
<?= Html::beginTag('div', ['class' => 'header navbar']) ?>
    <?= Html::beginTag('div', ['class' => 'header-container']) ?>
        <?php
            $menu_toggle[0] = [
                               'icon' => Html::tag('i', '', ['class' => 'ti-menu']),
                               'url' => 'javascript:void(0);', 
                               'linkOptions' => ['class' => 'sidebar-toggle', 'id' => 'sidebar-toggle',]
                              ];
            $menu_toggle[1] = [
                               'icon' => Html::tag('i', '', ['class' => 'search-icon ti-search pdd-right-10']) .
                                         Html::tag('i', '', ['class' => 'search-icon-close ti-close pdd-right-10']),
                               'url' => 'javascript:void(0);', 
                               'options' => ['class' => 'search-box'],
                               'linkOptions' => ['class' => 'search-toggle no-pdd-right']
                              ];
            $menu_toggle[2] = [
                               'label' => Html::tag('input', '', ['type' => 'text', 'placeholder' => 'Search...']), 
                               'options' => ['class' => 'search-input'],
                              ];

            echo MainSidebar::widget([
                'encodeLabels' => false,
                'labelTemplate' => '{label}',
                'linkTemplate' => '<a href="{url}" {linkOptions}>{icon}</a>',
                'options' => ['class' => 'nav-left'],
                'items' => $menu_toggle,
            ]);
        ?>

        <?php
            $menu[0] = [
                        'label' => html::begintag('div', ['class' => 'peer mR-10']) .
                                       html::img('https://randomuser.me/api/portraits/men/10.jpg',
                                           $options = ['class' => 'w-2r bdrs-50p']) .
                                   html::endTag('div') .                           
                                   html::begintag('div', ['class' => 'peer']) .
                                       html::tag('span', \yii::$app->user->identity->username,
                                           $options = ['class' => 'fsz-sm c-grey-900']) .
                                   html::endTag('div'),                           
                        'options'=> ['class'=>''],
                        'url' => '\\#',
                        'linkOptions' => ['class'=> 'no-after peers fxw-nw ai-c lh-1'],
                        'items' => [
                                    [
                                     'label' => html::tag('i', '', ['class' => 'ti-settings mR-10']) .
                                                html::tag('span', 'Settings'),
                                     'url' => '\\#',
                                     'linkOptions' => ['class' => 'd-b td-n pY-5 bgcH-grey-100 c-grey-700 fsz-sm']
                                    ],
                                    [
                                     'label' => html::tag('i', '', ['class' => 'ti-user mR-10']) .
                                                html::tag('span', 'Profile'),
                                     'url' => '\\#',
                                     'linkOptions' => ['class' => 'd-b td-n pY-5 bgcH-grey-100 c-grey-700 fsz-sm']
                                    ],
                                    [
                                     'label' => html::tag('i', '', ['class' => 'ti-email mR-10']) .
                                                html::tag('span', 'Messages'),
                                     'url' => '\\#',
                                     'linkOptions' => ['class' => 'd-b td-n pY-5 bgcH-grey-100 c-grey-700 fsz-sm']
                                    ],
                                    [
                                     'label' => html::tag('i', '', ['class' => 'ti-power-off mR-10']) .
                                                html::tag('span', 'Logout'),
                                     'url' => Url::to(['/site/logout']),
                                     'linkOptions' => ['class' => 'd-b td-n pY-5 bgcH-grey-100 c-grey-700 fsz-sm' ,
                                                       'data-method'=>'post']],
                                    ],
                           ];

            echo Nav::widget([
                'encodeLabels' => false,
                'options' => ['class' => 'nav-right'],
                'items' => $menu,
            ]);
        ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
<!- END - MENUSER !->