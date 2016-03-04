<?php

namespace humhub\modules\musicplayer\widgets;

use humhub\modules\musicplayer\models\MusicPlayer;

class Sidebar extends \humhub\components\Widget {

  public function run() {
    
    return $this->render(
      'sidebar',
    );
  }
}

?>

