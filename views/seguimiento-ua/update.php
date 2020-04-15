<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SeguimientoUa */

$this->title = Yii::t('app', 'Update Seguimiento Ua: {name}', [
    'name' => $model->id_seguimiento,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Seguimiento Uas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_seguimiento, 'url' => ['view', 'id' => $model->id_seguimiento]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="seguimiento-ua-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
