<?php

use yii\bootstrap\ActiveForm;
use yii\helper\Html;
use humhub\models\Setting;
use humhub\modules\musicplayer\controllers\AdminController;

?>

<div class="panel panel-default">
	<div class="panel-heading"><?= Yii::t('MusicplayerModule.base', '<strong>Music Player</strong>'); ?></div>
	<div class="panel-body">
		<?php $form = ActiveForm::begin(['id' => 'musicplayer-settings-form']); ?>
			<?= $form->errorSummary($model); ?>
			<p class="help-block"><?= Yii::t('MusicplayerModule.base', 'eg:  "99999999"'); ?></p>
			<div class="form-group">
				<?= $form->labelEx($model, 'sort'); ?>
				<?= $form->textField($model, 'sort', ['class' => 'form-control', 'readonly' => Setting::IsFixed('sort', 'musicplayer')]); ?>
			</div>
			<p class="help-block"><?=Yii::t('MusicplayerModule.base', 'Widget positioning.'); ?></p>
			<?= Html::submitButton(Yii::t('MusicplayerModule.base', 'Save'), ['class' => 'btn btn-primary']); ?>
			<?= \humhub\widgets\DataSaved::widget(); ?>
		<?php ActiveForm::end(); ?>
	</div>
</div>
