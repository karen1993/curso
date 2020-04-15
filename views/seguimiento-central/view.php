<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SeguimientoCentral */

$this->title = $model->id_seguimiento;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Seguimiento Centrals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="seguimiento-central-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_seguimiento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_seguimiento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_seguimiento',
            'observacion_avance',
            'observacion_final',
            'num_acta_avance',
            'num_acta_final',
            'resolucion_pago',
            'fecha_inf_avance',
            'fecha_evaluacion_avance',
            'dictamen',
            'fecha_inf_final',
            'fecha_evaluacion_final',
            'informe_avance',
            'informe_final',
            'rendicion',
            'estado_rendicion',
            'num_acta',
            'num_acta_prorroga',
            'prorrogar:boolean',
            'estado_prorroga',
            'observacion_prorroga',
            'id_pext',
            'res_rect',
            'nro_ord_cs',
            'codigo',
            'estado_informe_a',
            'estado_informe_f',
            'rendicion_monto',
            'fecha_rendicion',
            'fecha_prorroga1',
            'fecha_prorroga2',
            'res_desig',
            'informe_becario',
            'nro_expediente_pago',
            'fecha_informe_becario',
            'nro_acta_informe_becario',
            'estado_becario',
        ],
    ]) ?>

</div>
