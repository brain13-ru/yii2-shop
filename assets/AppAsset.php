<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       		'css/bootstrap.min.css',
			'css/icon-font.min.css',
			'css/plugins.css',
			'css/helper.css',
			'css/style.css',
    ];
    public $js = [
			'js/vendor/jquery-1.12.4.min.js',
			'js/popper.min.js',
			'js/bootstrap.min.js',
			'js/plugins.js',
			'js/ajax-mail.js',
			'js/jquery.cookie.js',
			'js/jquery.accordion.js',
			'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
