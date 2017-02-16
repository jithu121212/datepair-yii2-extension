<?php
/**
 * Created by PhpStorm.
 * User: d4
 * Date: 16/2/17
 * Time: 11:32 AM
 */
namespace entero\\datepair\;

use yii\web\AssetBundle;

class DatePairAsset extends AssetBundle
{
    public $sourcePath ='entero\\datepair\\assets';

    /***
     * @var array
     */
    public $css = [
    ];

    /***
     * @var array
     */
    public $js = [
        'js/datepair.js',
        'js/datepair.min.js',
        'js/jquery.datepair.js',
        'jquery.datepair.min.js',
    ];

    /***
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}