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
*    @Widget: [MainSidebar]
*     @since: 1.0
**/

namespace cjtterabytesoft\theme\adminskeleton\widgets;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;


class MainSidebar extends Menu
{
    /**
     * @var string
     */
    public $linkTemplate = '<a href="{url}" {linkOptions}>\n{icon}\n{label}\n{right-icon}\n{badge}</a>';
    /**
     * @var string
     */
    public $labelTemplate = '{icon}\n{label}\n{badge}';
    /**
     * @var string
     */
    public $submenuTemplate = "\n<ul class=\"dropdown-menu\">\n{items}\n</ul>\n";
    /**
     * @var string
     */
    public $badgeTag = 'small';
    /**
     * @var string
     */
    public $badgeClass = 'badge pull-right';
    /**
     * @var string
     */
    public $badgeBgClass = 'bg-green';
    /**
     * @var string
     */
    public $parentRightIcon = '<span class="arrow"><i class="ti-angle-right"></i></span>';
    /**
     * @inheritdoc
     */
    protected function renderItem($item)
    {
        $item['badgeOptions'] = isset($item['badgeOptions']) ? $item['badgeOptions'] : [];
        if (!ArrayHelper::getValue($item, 'badgeOptions.class')) {
            $bg = isset($item['badgeBgClass']) ? $item['badgeBgClass'] : $this->badgeBgClass;
            $item['badgeOptions']['class'] = $this->badgeClass . ' ' . $bg;
        }
        if (isset($item['items']) && !isset($item['right-icon'])) {
            $item['right-icon'] = $this->parentRightIcon;
        }
        if (isset($item['url'])) {
            $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);
            return strtr($template, [
                '{badge}'          => isset($item['badge']) ? Html::tag('small', $item['badge'], $item['badgeOptions']) : '',
                '{icon}'           => isset($item['icon']) ? $item['icon'] : '',
                '{right-icon}'     => isset($item['right-icon']) ? $item['right-icon'] : '',
                '{url}'            => Url::to($item['url']),
                '{label}'          => $item['label'],
                '{linkOptions}'    => isset($item['linkOptions']) ? Html::renderTagAttributes($item['linkOptions']): '',
            ]);
        } else {
            $template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);
            return strtr($template, [
                '{badge}'          => isset($item['badge']) ? Html::tag('small', $item['badge'], $item['badgeOptions']) : '',
                '{icon}'           => isset($item['icon']) ? $item['icon'] : '',
                '{right-icon}'     => isset($item['right-icon']) ? $item['right-icon'] : '',
                '{label}'          => $item['label'],
                '{linkOptions}'    => isset($item['linkOptions']) ? Html::renderTagAttributes($item['linkOptions']): '',
            ]);
        }
    }
}