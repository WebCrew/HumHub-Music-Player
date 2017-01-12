<?php
namespace humhub\modules\musicplayer;
use yii\helpers\Url;
use humhub\models\Setting;
use humhub\modules\musicplayer\widgets\MusicPlayerSidebarWidget;
class Module extends \humhub\components\Module
{
    public static function onSidebarInit($event)
    {
        $event->sender->addWidget(MusicPlayerSidebarWidget::className(), array(), array('sortOrder' => 250));
    }
    public function getConfigUrl()
    {
        return Url::to(['/musicplayer/config/config']);
    }
    public function enable()
    {
        parent::enable();
        Setting::Set('panelTitle', 'Music Player', 'musicplayer');
    }
}
?>
