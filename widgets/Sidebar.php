<?php

namespace humhub\modules\music_player\widgets;

use humhub\modules\music_player\models\MusicPlayer;

class Sidebar extends \humhub\components\Widget {

  public function run() {
    
    return $this->render(
      'sidebar',
    );
  }
}

?>

