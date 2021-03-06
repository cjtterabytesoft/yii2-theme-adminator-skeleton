<?php

/**
* This file is part of the CJTTERABYTESOFT yii2-theme-adminator-skeleton
*
* (c) CJT TERABYTE LLC yii2-theme-adminator-skeleton
* For the full copyright and license information, please view the LICENSE.md
* file that was distributed with this source code
*
*          @link: https://github.com/cjtterabytesoft/yii2-theme-adminator-skeleton
*        @author: Wilmer Arámbula <cjtterabytellc@gmail.com>
*     @copyright: (c) CJT TERABYTE LLC
*         @theme: [yii2-theme-adminator-skeleton]
* @Configuration: [Bootstrap]
*         @since: 1.0
*           @yii: 2.1
*/

namespace cjtterabytesoft\theme\adminskeleton;

use Yii;
use yii\base\BootstrapInterface;
use yii\i18n\PhpMessageSource;

class Bootstrap implements BootstrapInterface
{
	/** @inheritdoc */
	public function bootstrap($app)
	{
		/* Config Mailer */
		Yii::$app->mailer->composer->setViewPath('@cjtterabytesoft/theme/adminskeleton/mail');


		/* Config Translation */
		if (!isset($app->get('i18n')->translations['adminskeleton*'])) {
			$app->get('i18n')->translations['adminskeleton*'] = [
				'__class'    => PhpMessageSource::class,
				'basePath' => __DIR__ . '/messages',
			];
		}

		/* Copy Avatar Images */
		if (\yii\helpers\BaseFileHelper::filterPath(\Yii::getAlias('@public/images'), $options = [])) {
			\yii\helpers\BaseFileHelper::copyDirectory(\Yii::getAlias('@cjtterabytesoft/theme/adminskeleton/images/'),
				\Yii::getAlias('@public/images'));
		}
	}
}