<?php
namespace humhub\modules\musicplayer;

return [
    'id' => 'musicplayer',
    'class' => 'humhub\modules\musicplayer\Module',
    'namespace' => 'humhub\modules\musicplayer',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::className(),
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => array(
                'humhub\modules\musicplayer\Events',
                'addMusicplayerFrame'
            )
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::className(),
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => array(
                'humhub\modules\musicplayer\Events',
                'addMusicplayerFrame'
            )
        ],
        [
            'class' => \humhub\modules\user\widgets\ProfileSidebar::className(),
            'event' => \humhub\modules\user\widgets\ProfileSidebar::EVENT_INIT,
            'callback' => array(
                'humhub\modules\musicplayer\Events',
                'addMusicplayerFrame'
            )
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\musicplayer\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
