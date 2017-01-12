<?php

use humhub\modules\dashboard\widgets\Sidebar;

return [
  'id'        => 'musicplayer',
  'class'     => 'humhub\modules\musicplayer\Module',
  'namespace' => 'humhub\modules\musicplayer',
    'events' => array(
        array('class' => Sidebar::className(), 'event' => Sidebar::EVENT_INIT, 'callback' => array('humhub\modules\musicplayer\Module', 'onSidebarInit')),
    ),
];
?>
