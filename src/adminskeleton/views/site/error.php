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
*      @view: site[Error]
*     @since: 1.0
*       @yii: 2.1
**/

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

		<h1><?= Html::encode($this->title) ?></h1>

		<div class="alert alert-danger">
				<?= nl2br(Html::encode($message)) ?>
		</div>

		<p>
				The above error occurred while the Web server was processing your request.
		</p>
		<p>
				Please contact us if you think this is a server error. Thank you.
		</p>

</div>