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
*    @assets: [ThemefyIconsAsset]
*     @since: 1.0
**/

namespace cjtterabytesoft\theme\adminskeleton\assets\bower;

use yii\web\AssetBundle;

class ThemifyIconsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower-asset/themify-icons/';

    public $css = [
        'css/themify-icons.css',
    ];

    public $publishOptions = [
        'only' => [
            'fonts/*',
            'css/*',
        ],
        'except' => [
            'png',
            'src',
            'less',
            'scss',
        ]
    ];
}