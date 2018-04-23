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
*      @view: [_Menu]
*     @since: 1.0
**/

use yii\bootstrap4\Nav;
use yii\helpers\Html;

?>

<!- MENU - START !->
<?php $user = \yii::$app->user->identity; 

$menuItems = [
    [
     'label' => Html::tag('i', '', ['class' => 'fa fa-home fa-lg']) . ' ' .  
                Yii::t('adminator', 'Home'), 'url' => ['/site/index']
    ],
    [
     'label' => Html::tag('i', '', ['class' => 'fa fa-spinner fa-lg fa-spin']) . ' ' .  
                Yii::t('adminator', 'About Us'), 'url' => ['/site/about']
    ],
    [
     'label' => Html::tag('i', '', ['class' => 'fa fa-envelope fa-lg']) . ' ' . 
                Yii::t('adminator', 'Contact'), 'url' => ['/site/contact']
    ],
]; 

if (Yii::$app->user->isGuest) {
    $menuItems[] = [
                    'label' => Html::tag('i', '', ['class' => 'ion-android-person-add fa-lg']) . ' ' . 
                               Yii::t('adminator', 'Signup'), 'url' => ['/site/signup']
                   ];
    $menuItems[] = [
                    'label' => Html::tag('i', '', ['class' => 'fa fa-sign-in fa-lg']) . ' ' . 
                               Yii::t('adminator', 'Login'), 'url' => ['/site/login']
                   ];
    } else {
        $baseimg = Yii::$app->session->get('user.avatar60');
        $menuItems[] = [
                        'label' => $user->username . ' ' . Html::img($baseimg, 
                                   $options = ['class'=>'img-rounded', 'aria-expanded'=>'false']),
                        'items' => [
                                    [
                                     'label' => Html::tag('i', '', ['class' => 'fa fa-user fa-lg']) . ' ' . 
                                                Yii::t('adminator', 'User Profile'), 
                                     'url' => ['/user/settings/profile']
                                    ],
                                    [
                                     'label' => Html::tag('i', '', ['class' => 'fa fa-sign-out fa-lg']) . ' ' . 
                                                Yii::t('adminator', 'Logout'), 
                                     'url' => ['/site/logout'], 
                                     'linkOptions' => ['data-method' => 'post']
                                    ],
                                   ],
                       ];
}

echo Nav::widget([
    'options' => ['class' => 'nav-right'],
    'items' => $menuItems,
    'encodeLabels'=>false,
]);
?>
<!- MENU - END !->        