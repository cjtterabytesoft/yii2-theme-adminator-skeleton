<?php

/**
* This file is part of the CJTTERABYTESOFT yii2-theme-adminator-skeleton
*
* (c) CJT TERABYTE LLC yii2-theme-adminator-skeleton
* For the full copyright and license information, please view the LICENSE.md
* file that was distributed with this source code
*
*       @link: https://github.com/cjtterabytesoft/yii2-theme-adminator-skeleton
*     @author: Wilmer Arámbula <cjtterabytellc@gmail.com>
*  @copyright: (c) CJT TERABYTE LLC
*      @theme: [yii2-theme-adminator-skeleton]
* @controller: [PagesController]
*      @since: 1.0
*        @yii: 2.1
**/

namespace cjtterabytesoft\theme\adminskeleton\controllers;


use Yii;
use yii\base\InvalidParamException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

class PagesController extends Controller
{

	public $defaultAction = 'dashboard';

	public function actions()
	{
		return [
			'error' => [
				'__class' => yii\web\ErrorAction::class,
			],
		];
	}

	/**
	* Displays Dashboard.
	*
	* @return mixed
	**/

	public function actionDashboard()
	{
		return $this->render('dashboard');
	}
}