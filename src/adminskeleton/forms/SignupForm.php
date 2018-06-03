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
*     @forms: models[SignupForm]
*     @since: 1.0
*       @yii: 2.1
**/

namespace cjtterabytesoft\theme\adminskeleton\forms;

use yii\base\Model;
use app\models\User;

class SignupForm extends Model
{
	public $username;
	public $email;
	public $password;
	public $verifyCode;

	/**
	* {@inheritdoc}
	*/

	public function rules()
	{
		return [
			['username', 'trim'],
			['username', 'required'],
			['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
			['username', 'string', 'min' => 2, 'max' => 255],
			['email', 'trim'],
			['email', 'required'],
			['email', 'email'],
			['email', 'string', 'max' => 255],
			['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
			['password', 'required'],
			['password', 'string', 'min' => 6],
			// verifyCode needs to be entered correctly
			//['verifyCode', 'captcha'],
		];
	}
	
	/**
	* Signs user up.
	*
	* @return User|null the saved model or null if saving fails
	*/
	
	public function signup()
	{
		if (!$this->validate()) {
			return null;
		}
		
		$user = new User();
		$user->username = $this->username;
		$user->email = $this->email;
		$user->setPassword($this->password);
		$user->generateAuthKey();
		
		return $user->save() ? $user : null;
	}
}