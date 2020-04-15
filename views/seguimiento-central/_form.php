<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SeguimientoCentral */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seguimiento-central-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'observacion_avance')->textInput() ?>

    <?= $form->field($model, 'observacion_final')->textInput() ?>

    <?= $form->field($model, 'num_acta_avance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_acta_final')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resolucion_pago')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_inf_avance')->textInput() ?>

    <?= $form->field($model, 'fecha_evaluacion_avance')->textInput() ?>

    <?= $form->field($model, 'dictamen')->textInput() ?>

    <?= $form->field($model, 'fecha_inf_final')->textInput() ?>

    <?= $form->field($model, 'fecha_evaluacion_final')->textInput() ?>

    <?= $form->field($model, 'informe_avance')->textInput() ?>

    <?= $form->field($model, 'informe_final')->textInput() ?>

    <?= $form->field($model, 'rendicion')->textInput() ?>

    <?= $form->field($model, 'estado_rendicion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_acta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_acta_prorroga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prorrogar')->checkbox() ?>

    <?= $form->field($model, 'estado_prorroga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observacion_prorroga')->textInput() ?>

    <?= $form->field($model, 'id_pext')->textInput() ?>

    <?= $form->field($model, 'res_rect')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nro_ord_cs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codigo')->textInput() ?>

    <?= $form->field($model, 'estado_informe_a')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado_informe_f')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rendicion_monto')->textInput() ?>

    <?= $form->field($model, 'fecha_rendicion')->textInput() ?>

    <?= $form->field($model, 'fecha_prorroga1')->textInput() ?>

    <?= $form->field($model, 'fecha_prorroga2')->textInput() ?>

    <?= $form->field($model, 'res_desig')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'informe_becario')->textInput() ?>

    <?= $form->field($model, 'nro_expediente_pago')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_informe_becario')->textInput() ?>

    <?= $form->field($model, 'nro_acta_informe_becario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado_becario')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
