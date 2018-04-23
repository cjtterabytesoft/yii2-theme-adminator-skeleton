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
*    @Widget: [Alert]
*     @since: 1.0
**/

/**
* @link http://www.yiiframework.com/
* @copyright Copyright (c) 2008 Yii Software LLC
* @license http://www.yiiframework.com/license/
**/

namespace cjtterabytesoft\theme\adminskeleton\widgets;

/**
* Alert widget renders a message from session flash. All flash messages are displayed
* in the sequence they were assigned using setFlash. You can set message as following:
*
* ```php
* \Yii::$app->getSession()->setFlash('error', 'This is the message');
* \Yii::$app->getSession()->setFlash('success', 'This is the message');
* \Yii::$app->getSession()->setFlash('info', 'This is the message');
* ```
*
* Multiple messages could be set as follows:
*
* ```php
* \Yii::$app->getSession()->setFlash('error', ['Error 1', 'Error 2']);
* ```
*
* @author Kartik Visweswaran <kartikv2@gmail.com>
* @author Alexander Makarov <sam@rmcreative.ru>
**/

class Alert extends \yii\bootstrap4\Widget
{
    /**
    * @var array the alert types configuration for the flash messages.
    * This array is setup as $key => $value, where:
    * - $key is the name of the session flash variable
    * - $value is the bootstrap alert type (i.e. danger, success, info, warning)
    **/

    public $alertTypes = [
        'error'   => 'alert-danger',
        'danger'  => 'alert-danger',
        'success' => 'alert-success',
        'info'    => 'alert-info',
        'warning' => 'alert-warning'
    ];

    /**
    * @var array the options for rendering the close button tag.
    **/

    public $closeButton = [];

    public function init()
    {
        parent::init();
        $session = \Yii::$app->getSession();
        $flashes = $session->getAllFlashes();
        $appendCss = isset($this->options['class']) ? ' ' . $this->options['class'] : '';
        foreach ($flashes as $type => $data) {
            if (isset($this->alertTypes[$type])) {
                $data = (array) $data;
                foreach ($data as $message) {
                    /* initialize css class for each alert box */
                    $this->options['class'] = $this->alertTypes[$type] . $appendCss;
                    /* assign unique id to each alert box */
                    $this->options['id'] = $this->getId() . '-' . $type;
                    echo \yii\bootstrap\Alert::widget([
                        'body' => $message,
                        'closeButton' => $this->closeButton,
                        'options' => $this->options,
                    ]);
                }
                $session->removeFlash($type);
            }
        }
    }
}