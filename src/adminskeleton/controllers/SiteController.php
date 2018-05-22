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
* @controller: [SiteController]
*      @since: 1.0
**/

namespace cjtterabytesoft\theme\adminskeleton\controllers;

use app\forms\ContactForm;
use cjtterabytesoft\theme\adminskeleton\forms\LoginForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{
	/**
	* {@inheritdoc}
	*/
	
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::class,
				'only' => ['logout'],
				'rules' => [
					[
						'actions' => ['logout'],
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
			'verbs' => [
				'class' => VerbFilter::class,
				'actions' => [
					'/adminskeleton/site/logout' => ['POST'],
				],
			],
		];
	}
	
	/**
	* {@inheritdoc}
	*/
	
	public function actions()
	{
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha' => [
				'class' => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			],
		];
	}
	
	/**
	* Displays homepage.
	*
	* @return string
	*/
	
	public function actionIndex()
	{
		return $this->render('index');
	}
	
	/**
	* Login action.
	*
	* @return Response|string
	*/
	
	public function actionLogin()
	{
		if (!Yii::$app->user->isGuest) {
			return $this->goHome();
		}
		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login()) {
			return $this->goBack();
		}
		$model->password = '';
		return $this->render('login', [
			'model' => $model,
		]);
	}
	
	/**
	* Logout action.
	*
	* @return Response
	*/
	
	public function actionLogout()
	{
		Yii::$app->user->logout();
		return $this->goHome();
	}
	
	/**
	* Displays contact page.
	*
	* @return Response|string
	*/
	
	public function actionContact()
	{
		$model = new ContactForm();
		if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
			Yii::$app->session->setFlash('contactFormSubmitted');
			return $this->refresh();
		}
		return $this->render('contact', [
			'model' => $model,
		]);
	}

	/**
	* Displays about page.
	*
	* @return string
	*/

	public function actionAbout()
	{
		return $this->render('about');
	}
}