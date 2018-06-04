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
*        @yii: 2.1
**/

namespace cjtterabytesoft\theme\adminskeleton\controllers;

use app\forms\ContactForm;
use cjtterabytesoft\theme\adminskeleton\forms\LoginForm;
use cjtterabytesoft\theme\adminskeleton\forms\SignupForm;
use cjtterabytesoft\theme\adminskeleton\forms\PasswordResetRequestForm;

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
				'only' => ['logout', 'signup'],
				'rules' => [
					[
						'actions' => ['signup'],
						'allow' => true,
						'roles' => ['?'],
					],
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
		if (!Yii::$app->user->isGuest) {
			return $this->render('dashboard');
			} else {
				return $this->render('index');
		} 
		
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

	/**
	* Signs user up.
	*
	* @return mixed
	*/

	public function actionSignup()
	{
		$model = new SignupForm();
		if ($model->load(Yii::$app->request->post())) {
			if ($user = $model->signup()) {
				if (Yii::$app->getUser()->login($user)) {
					return $this->goHome();
				}
			}
		}
		return $this->render('signup', [
			'model' => $model,
		]);
	}
	
	/**
	* Requests password reset.
	*
	* @return mixed
	*/
	
	public function actionRequestPasswordReset()
	{
		$model = new PasswordResetRequestForm();
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			if ($model->sendEmail()) {
				Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
				return $this->goHome();
			} else {
				Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
			}
		}
		return $this->render('requestPasswordResetToken', [
			'model' => $model,
		]);
	}
	
	/**
	* Resets password.
	*
	* @param string $token
	* @return mixed
	* @throws BadRequestHttpException
	*/
	
	public function actionResetPassword($token)
	{
		try {
			$model = new ResetPasswordForm($token);
		} catch (InvalidParamException $e) {
			throw new BadRequestHttpException($e->getMessage());
		}
		if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
			Yii::$app->session->setFlash('success', 'New password saved.');
			return $this->goHome();
		}
		return $this->render('resetPassword', [
			'model' => $model,
		]);
	}

	/**
	* Displays dashboard page.
	*
	* @return string
	*/

	public function actionDashboard()
	{
		return $this->render('dashboard');
	}
}