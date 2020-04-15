<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Seguimiento Centrals');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seguimiento-central-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Seguimiento Central'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_seguimiento',
            'observacion_avance',
            'observacion_final',
            'num_acta_avance',
            'num_acta_final',
            //'resolucion_pago',
            //'fecha_inf_avance',
            //'fecha_evaluacion_avance',
            //'dictamen',
            //'fecha_inf_final',
            //'fecha_evaluacion_final',
            //'informe_avance',
            //'informe_final',
            //'rendicion',
            //'estado_rendicion',
            //'num_acta',
            //'num_acta_prorroga',
            //'prorrogar:boolean',
            //'estado_prorroga',
            //'observacion_prorroga',
            //'id_pext',
            //'res_rect',
            //'nro_ord_cs',
            //'codigo',
            //'estado_informe_a',
            //'estado_informe_f',
            //'rendicion_monto',
            //'fecha_rendicion',
            //'fecha_prorroga1',
            //'fecha_prorroga2',
            //'res_desig',
            //'informe_becario',
            //'nro_expediente_pago',
            //'fecha_informe_becario',
            //'nro_acta_informe_becario',
            //'estado_becario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
