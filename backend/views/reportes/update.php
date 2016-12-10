<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Reportes */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Reportes',
]) . $model->reporte_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reportes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reporte_id, 'url' => ['view', 'id' => $model->reporte_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="reportes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
