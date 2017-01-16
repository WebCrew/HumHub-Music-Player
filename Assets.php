<?php


namespace humhub\modules\musicplayer;

use yii\web\AssetBundle;

class Assets extends AssetBundle {

  public $publishOptions = [
    'forceCopy' => TRUE,
  ];

  public $css = [
    'style.css.'
  ];
  
  public $js = [
    'amplitude.js.',
    'amplitude.min.js.',
    'jquery.min.js.'
  ];

  public function init() {
    $this->sourcePath = dirname(__FILE__) . '/assets';
    parent::init();
  }

}
