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
*    @Widget: [NavBar]
*     @since: 1.0
**/

namespace cjtterabytesoft\theme\adminskeleton\widgets;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class NavBar extends \yii\bootstrap4\Widget
{
	/**
	 * Initializes the widget.
	 */
	public function init()
	{
		parent::init();
		$this->clientOptions = false;
		if (empty($this->options['class'])) {
			Html::addCssClass($this->options, ['navbar', 'navbar-light', 'bg-faded']);
		} else {
			Html::addCssClass($this->options, ['widget' => 'navbar']);
		}
		if (empty($this->options['role'])) {
			$this->options['role'] = 'navigation';
		}
		$options = $this->options;
		$tag = ArrayHelper::remove($options, 'tag', 'nav');
		echo Html::beginTag($tag, $options);
		if ($this->renderInnerContainer) {
			if (!isset($this->innerContainerOptions['class'])) {
				Html::addCssClass($this->innerContainerOptions, 'container');
			}
			echo Html::beginTag('div', $this->innerContainerOptions);
		}
		echo Html::beginTag('div', ['class' => 'navbar-header']);
		if (!isset($this->containerOptions['id'])) {
			$this->containerOptions['id'] = "{$this->options['id']}-collapse";
		}
		echo $this->renderToggleButton();
		if ($this->brandImage !== false) {
			$this->brandLabel = Html::img($this->brandImage);
		}
		if ($this->brandLabel !== false) {
			Html::addCssClass($this->brandOptions, ['widget' => 'navbar-brand']);
			echo Html::a($this->brandLabel, $this->brandUrl === false ? Yii::$app->homeUrl : $this->brandUrl, $this->brandOptions);
		}
		echo $this->headerContent;
		echo Html::endTag('div');
		Html::addCssClass($this->containerOptions, ['collapse' => 'collapse', 'widget' => 'navbar-collapse']);
		$options = $this->containerOptions;
		$tag = ArrayHelper::remove($options, 'tag', 'div');
		echo Html::beginTag($tag, $options);
	}

	/**
	 * Renders collapsible toggle button.
	 * @return string the rendering toggle button.
	 */
	protected function renderToggleButton()
	{
		$screenReader = "<span class=\"sr-only\">{$this->screenReaderToggleText}</span>";

		return Html::button("{$screenReader}\n&#9776;", [
			'class' => 'navbar-toggler',
			'data-toggle' => 'collapse',
			'data-target' => "#{$this->containerOptions['id']}",
		]);
	}
}