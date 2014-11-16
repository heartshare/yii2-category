<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use amstr1k\category\Module;

/* @var $this yii\web\View */
/* @var $model amstr1k\category\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="offer-category-form">

  <?php $form = ActiveForm::begin(); ?>

  <?= $form->field($model, 'title')->textInput(['maxlength' => 512]) ?>

  <?= $form->field($model, 'description')->widget(
    \yii\imperavi\Widget::className(),
    [
      'plugins' => ['fullscreen'],
      'options' => [
        'minHeight'       => 400,
        'maxHeight'       => 400,
        'buttonSource'    => true,
        'convertDivs'     => false,
        'removeEmptyTags' => false,
        'imageUpload'     => Yii::$app->urlManager->createUrl(['/file-manager/upload-imperavi'])
      ]
    ]
  ) ?>

  <?= $form->field($model, 'is_published')->label(Module::t('category', 'IS_PUBLISHED'))->checkbox() ?>

  <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? Module::t('category', 'CREATE') : Module::t('category', 'UPDATE'),
      ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
  </div>

  <?php ActiveForm::end(); ?>

</div>
