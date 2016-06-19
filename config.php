<?php

use humhub\modules\dashboard\widgets\Sidebar;

return [
  'id'        => 'musicplayer',
  'class'     => 'humhub\modules\musicplayer\Module',
  'namespace' => 'humhub\modules\musicplayer',
    'events' => [
        ['class' => Sidebar::className(), 'event' => Sidebar::EVENT_INIT, 'callback' => ['humhub\modules\musicplayer\Module', 'onSidebarInit']],
    ],
];
?>
