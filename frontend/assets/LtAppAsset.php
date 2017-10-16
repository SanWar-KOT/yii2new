<?php
/**
 * Created by PhpStorm.
 * User: SanWar
 * Date: 13.09.17
 * Time: 22:52
 */

namespace frontend\assets;
use yii\web\AssetBundle;

class LtAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'js/html5shiv.js',
        'js/respond.min.js',
    ];

    public $jsOptions =[
      'condition' => 'lte IE 9',
      'position' => \yii\web\View::POS_HEAD
    ];
}