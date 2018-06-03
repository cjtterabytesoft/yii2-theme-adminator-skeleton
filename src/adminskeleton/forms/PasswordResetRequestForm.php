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
*     @forms: models[PasswordResetRequestForm]
*     @since: 1.0
**/

namespace cjtterabytesoft\theme\adminskeleton\forms;

use Yii;
use yii\base\Model;
use app\models\User;

class PasswordResetRequestForm extends Model
{
	public $email;

	/**
	* {@inheritdoc}
	*/
	
	public function rules()
	{
		return [
			['email', 'trim'],
			['email', 'required'],
			['email', 'email'],
			['email', 'exist',
				'targetClass' => '\app\models\User',
				'filter' => ['status' => User::STATUS_ACTIVE],
				'message' => 'There is no user with this email address.'
			],
		];
	}
	
	/**
	* Sends an email with a link, for resetting the password.
	*
	* @return bool whether the email was send
	*/
	
	public function sendEmail()
	{
		/* @var $user User */
		$user = User::findOne([
			'status' => User::STATUS_ACTIVE,
			'email' => $this->email,
		]);
		if (!$user) {
			return false;
		}
		
		if (!User::isPasswordResetTokenValid($user->password_reset_token)) {
			$user->generatePasswordResetToken();
			if (!$user->save()) {
				return false;
			}
		}
	
		return Yii::$app
			->mailer
			->compose(
				['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'],
				['user' => $user]
			)
			->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
			->setTo($this->email)
			->setSubject('Password reset for ' . Yii::$app->name)
			->send();
	}
}