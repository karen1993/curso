<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SeguimientoCentral */

$this->title = Yii::t('app', 'Update Seguimiento Central: {name}', [
    'name' => $model->id_seguimiento,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Seguimiento Centrals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_seguimiento, 'url' => ['view', 'id' => $model->id_seguimiento]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="seguimiento-central-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
