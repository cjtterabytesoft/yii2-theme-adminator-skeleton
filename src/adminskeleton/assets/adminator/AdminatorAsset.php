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
*    @assets: [AdminatorAsset]
*     @since: 1.0
**/

namespace cjtterabytesoft\theme\adminskeleton\assets\adminator;

use yii\web\AssetBundle;

class AdminatorAsset extends AssetBundle
{
	public $sourcePath = '@cjtterabytesoft/theme/adminskeleton/assets/adminator/';

	public $css = [
		'css/adminator.css',
	];

	public $js = [
		'js/lodash.custom.min.js',
		'js/adminator.js',
	];

	public $depends = [
		'yii\jquery\JqueryAsset',
		'yii\bootstrap4\BootstrapAsset',
		'yii\bootstrap4\BootstrapPluginAsset',
		'cjtterabytesoft\theme\adminskeleton\assets\bower\BootBoxAsset',
		'cjtterabytesoft\theme\adminskeleton\assets\bower\FontAwesomeAsset',
		'cjtterabytesoft\theme\adminskeleton\assets\bower\ThemifyIconsAsset',
	];

	public $publishOptions = [
		'only' => [
			'adminator.css',
			'adminator.css.map',
			'lodash.custom.min.js',
			'adminator.js',
		],
	];
}