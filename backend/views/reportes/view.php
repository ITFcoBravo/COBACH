<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Reportes */

$this->title = $model->reporte_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reportes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reportes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->reporte_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->reporte_id], [
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
            'reporte_id',
            'personal_id',
            'inmueble_id',
            'nombre_reporte',
            'descripcion',
            'fecha',
            'Activo',
        ],
    ]) ?>

</div>
