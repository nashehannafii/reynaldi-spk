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
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/font-face.css',
        // 'css/theme.css',
        // 'vendor/font-awesome-4.7/css/font-awesome.min.css',
        // 'vendor/font-awesome-5/css/fontawesome-all.min.css',
        // 'vendor/mdi-font/css/material-design-iconic-font.min.css',
        // 'vendor/bootstrap-4.1/bootstrap.min.css',
        // 'vendor/animsition/animsition.min.css',
        // 'vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css',
        // 'vendor/wow/animate.css',
        // 'vendor/css-hamburgers/hamburgers.min.css',
        // 'vendor/slick/slick.css',
        // 'vendor/select2/select2.min.css',
        // 'vendor/perfect-scrollbar/perfect-scrollbar.css',
        // 'css/theme.css'
        'assets-portal/css/portal.css'
    ];
    public $js = [
        // 'vendor/jquery-3.2.1.min.js',
        // 'vendor/bootstrap-4.1/popper.min.js',
        // 'vendor/bootstrap-4.1/bootstrap.min.js',
        // 'vendor/slick/slick.min.js',
        // 'vendor/wow/wow.min.js',
        // 'vendor/animsition/animsition.min.js',
        // 'vendor/bootstrap-progressbar/bootstrap-progressbar.min.js',
        // 'vendor/counter-up/jquery.waypoints.min.js',
        // 'vendor/counter-up/jquery.counterup.min.js',
        // 'vendor/circle-progress/circle-progress.min.js',
        // 'vendor/perfect-scrollbar/perfect-scrollbar.js',
        // 'vendor/chartjs/Chart.bundle.min.js',
        // 'vendor/select2/select2.min.js',
        // 'js/cooladmin.js'
        'assets-portal/plugins/fontawesome/js/all.min.js',
        'assets-portal/plugins/bootstrap/js/bootstrap.min.js',
        'assets-portal/plugins/popper.min.js',
        'assets-portal/js/app.js',
        'assets-portal/plugins/chart.js/chart.min.js',
        'assets-portal/js/app.js',
        'assets-portal/plugins/fontawesome/js/all.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
