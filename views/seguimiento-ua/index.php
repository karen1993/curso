<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Seguimiento Uas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seguimiento-ua-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Seguimiento Ua'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_seguimiento',
            'id_pext',
            'observacion_ua',
            'nro_resol',
            'fecha_resol',
            //'tipo_docum',
            //'nro_docum',
            //'desde',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
