/**
* This file is part of the CJTTERABYTESOFT yii2-theme-adminator-admin
*
* (c) CJT TERABYTE LLC yii2-theme-adminator-admin <http://gitlab.com/cjtterabytesoft>
* For the full copyright and license information, please view the LICENSE.md
* file that was distributed with this source code
*
*      @link: http://www.tusoporte.net
*    @author: Wilmer Arámbula <cjtterabytellc@gmail.com>
* @copyright: (c) CJT TERABYTE LLC
*     @theme: [yii2-theme-adminator-admin]
*        @js: [Site-Adminator]
*     @since: 1.0
**/

/***********************************************************************************************************************
* BootBox
***********************************************************************************************************************/

(function ($) {
    yii.confirm = function(message, ok, cancel) {
        bootbox.confirm(message, function(result) {
            if (result) { !ok || ok(); } else { !cancel || cancel(); }
        });
    }
})(window.jQuery);

window.addEventListener('load', () => {
    const loader = document.getElementById('loader');
    setTimeout(() => {loader.classList.add('fadeOut');}, 400);
    }
);