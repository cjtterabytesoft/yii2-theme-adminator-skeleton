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
*      @view: site[About]
*     @since: 1.0
*       @yii: 2.1
**/

/* @var $this yii\web\View */

use yii\helpers\Html;
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
		<h1><?= Html::encode($this->title) ?></h1>

		<p>
				This is the About page. You may modify the following file to customize its content:
		</p>

		<code><?= __FILE__ ?></code>
</div>