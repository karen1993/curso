<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SeguimientoUa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seguimiento-ua-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pext')->textInput() ?>

    <?= $form->field($model, 'observacion_ua')->textInput() ?>

    <?= $form->field($model, 'nro_resol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_resol')->textInput() ?>

    <?= $form->field($model, 'tipo_docum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nro_docum')->textInput() ?>

    <?= $form->field($model, 'desde')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
