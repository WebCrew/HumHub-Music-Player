<?php
namespace humhub\modules\musicplayer\forms;
use Yii;
class MusicPlayerConfigureForm extends \yii\base\Model
{
    public $panelTitle;
    public function rules()
    {
        return array(
            array(['panelTitle'], 'required'),
        );
    }
    public function attributeLabels()
    {
        return array(
            'panelTitle' => Yii::t('MusicPlayerModule.base', 'The panel title for the dashboard widget.'),
        );
    }
}
