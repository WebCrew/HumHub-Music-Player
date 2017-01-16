<?php
namespace humhub\modules\musicplayer\widgets;

use humhub\components\Widget;

class MusicplayerFrame extends Widget
{

    public $contentContainer;

    public function run()
    {
        return $this->render('musicplayerframe', []);
    }
}
