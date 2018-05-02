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
*    @assets: [AppAdminatorAsset]
*     @since: 1.0
**/

namespace cjtterabytesoft\theme\adminskeleton\assets\custom;

use yii\web\AssetBundle;

class StyleAsset extends AssetBundle
{
	public $sourcePath = '@cjtterabytesoft/theme/adminskeleton/assets/custom/';

	public $css = [
		'css/style.css',
	];

	public $js = [
		'js/style.js',
	];

	public $publishOptions = [
		'only' => [
			'style.css',
			'style.js',
		],
	];
}