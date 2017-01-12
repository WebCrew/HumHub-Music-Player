<?php
namespace humhub\modules\musicplayer\controllers;
use Yii;
use humhub\modules\admin\components\Controller;
use humhub\modules\musicplayer\forms\MusicPlayerConfigureForm;
use humhub\models\Setting;
/**
 * Defines the configure actions.
 *
 * @package humhub.modules.musicplayer.controllers
 * @author WebCrew
 */
class ConfigController extends Controller
{
    /**
     * Configuration Action for Super Admins
     */
    public function actionConfig()
    {
        $form = new MusicPlayerConfigureForm();
        $form->panelTitle = Setting::Get('panelTitle', 'musicplayer');
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $form->panelTitle = Setting::Set('panelTitle', $form->panelTitle, 'musicplayer');

            Yii::$app->getSession()->setFlash('data-saved', Yii::t('AdminModule.controllers_SettingController', 'Saved'));
            $this->redirect(['/musicplayer/config/config']);
        }
        return $this->render('config', array('model' => $form));
    }
}
?>
