<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SeguimientoCentral */

$this->title = Yii::t('app', 'Create Seguimiento Central');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Seguimiento Centrals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seguimiento-central-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
