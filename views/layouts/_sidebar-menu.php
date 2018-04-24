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
*      @view: layout[_Sidebar_Menu]
*     @since: 1.0
**/

use cjtterabytesoft\theme\adminskeleton\widgets\MainSidebar;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<!- SIDEBAR-MENU -!>

<!- DEFINITION MENU OPTIONS [label - icon - url - linkOptions, options] -!>

<?php

$sidebar_menu[0] = [
                    'label' => Html::tag('span', html::encode(Yii::t('adminator','Dashboard')), ['class' => 'title']),
                    'icon' => Html::tag('span', Html::tag('i', '', ['class' => 'c-blue-500 ti-home']),
                                  ['class' => 'icon-holder']),
                    'url' => Yii::$app->homeUrl,
                    'linkOptions'=> ['class'=>'sidebar-link'],
                    'options' =>['class' => 'nav-item']
                   ];

echo MainSidebar::widget([
    'options'         => ['class' => 'sidebar-menu scrollable pos-r'],
    'labelTemplate'   => '<a href="#">{icon}{label}{right-icon}</a>',
    'linkTemplate'    => '<a href="{url}" {linkOptions}>{icon}{label}{right-icon}</a>',
    'submenuTemplate' => "<ul class=\"dropdown-menu\">{items}</ul>",
    'activateParents' => true,
    'encodeLabels'    => false,
    'items'           => $sidebar_menu,
    'activeCssClass'  => 'active open',
]);

?>
<!- END - SIDEBAR-MENU -!>