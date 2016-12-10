<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Inmuebles */

$this->title = $model->inmueble_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Inmuebles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inmuebles-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->inmueble_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->inmueble_id], [
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
            'inmueble_id',
            'ubicacion_id',
            'nombre',
            'Activo',
            'descripcion',
            'numero_control',
            'marca',
            'numero_serie',
            'modelo',
            'cantidad_inventario',
            'costo',
            'digito',
            'fecha_adquisicion',
            'fotografia_uno',
            'fotografia_dos',
            'fotografia_detalle',
        ],
    ]) ?>

</div>
