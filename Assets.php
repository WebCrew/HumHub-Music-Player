<?php

/**
 * @link      https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license   https://www.humhub.com/licences
 */

namespace humhub\modules\music_player;

use yii\web\AssetBundle;

class Assets extends AssetBundle {

  public $publishOptions = [
    'forceCopy' => TRUE,
  ];

  public $css = [
    'amplitude.js.',
    'amplitude.min.js.',
    'jquery.min.js.',
    'style.css.',
  ];

  public function init() {
    $this->sourcePath = dirname(__FILE__) . '/assets';
    parent::init();
  }

}
