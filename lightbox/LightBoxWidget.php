<?php
namespace hjrtest\lightbox;









use hjrtest\lightbox\assets\LightBoxAsset;
use yii\base\InvalidConfigException;
use yii\helpers\Html;

/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2016/4/22
 * Time: 16:21
 */
class LightBoxWidget extends \yii\base\Widget
{
    public $src;
    public $height;
    public $width;

    public function init()
    {
        parent::init();
        if ($this->src == null) {
            throw new InvalidConfigException("'src' properties must be specified.");
        }
    }

    public function run()
    {
        LightBoxAsset::register($this->view);
        echo Html::a(Html::img($this->src,['height'=>$this->height,'width'=>$this->width]), $this->src, ['data-lightbox' => "example"]);
    }

}