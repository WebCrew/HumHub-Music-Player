<?php

namespace humhub\modules\music_player;

use humhub\models\Setting;
use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module {

  const NAME = 'music_player';

  /**
   * On build of the dashboard sidebar widget, add the music_player widget if module is enabled.
   *
   * @param type $event
   */
  public static function onSidebarInit($event) {
    if (Yii::$app->hasModule(self::NAME)) {

      $event->sender->addWidget(
        widgets\Sidebar::className(),
        [],
        [
          'sortOrder' => 201,
        ]
      );
    }
  }

  public function getConfigUrl() {
    return Url::to(['/music_player/config/config']);
  }

  /**
   * Enables this module
   */
  public function enable() {
    if (!Yii::$app->hasModule(self::NAME)) {
      parent::enable();
  }
}

?>
