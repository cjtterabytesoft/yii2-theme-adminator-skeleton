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
*      @view: layout[_Sidebar]
*     @since: 1.0
**/

use yii\helpers\Html;

?>

<!- SIDEBAR - START -!>
<?= Html::begintag('div', ['class' => 'sidebar']) ?>
	<?= Html::begintag('div', ['class' => 'sidebar-inner']) ?>
		<!- SIDEBAR-HEADER -!>
		<?= $this->render('_sidebar-header') ?>
		<!- SIDEBAR-MENU -!>
		<?= $this->render('_sidebar-menu') ?>
	<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
<!- SIDEBAR - END -!>