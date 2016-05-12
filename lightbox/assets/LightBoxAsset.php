<?php
namespace hjrtest\lightbox\assets;
use yii\web\AssetBundle;
use yii\web\View;





/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2016/4/22
 * Time: 16:17
 */
class LightBoxAsset extends AssetBundle
{
    public $js = [
        'js/lightbox-2.6.min.js',
    ];
    public $css = [
        'css/lightbox.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
    public $cssOptions = [
        'position' => View::POS_HEAD
    ];


    /**
     * 初始化：sourcePath赋值
     * @see \yii\web\AssetBundle::init()
     */
    public function init()
    {
        $this->sourcePath = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor';
    }
}