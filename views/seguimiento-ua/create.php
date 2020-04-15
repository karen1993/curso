<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SeguimientoUa */

$this->title = Yii::t('app', 'Create Seguimiento Ua');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Seguimiento Uas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seguimiento-ua-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
