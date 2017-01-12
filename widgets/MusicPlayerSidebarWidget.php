<?php
namespace humhub\modules\musicplayer\widgets;
use Yii;
use yii\helpers\Url;
use humhub\models\Setting;
use yii\web\HttpException;

class MusicPlayerSidebarWidget extends \yii\base\Widget
{
    /**
     * Execute widget
     */
    public function run()
    {
        return $this->render('musicplayer', array(
                    'MusicPlayer' => $MusicPlayer,
                    'title' => Setting::Get('panelTitle', 'musicplayer')
        ));
    }
}
?>
