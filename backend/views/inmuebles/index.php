<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\InmueblesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Inmuebles');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inmuebles-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Inmuebles'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'inmueble_id',
            'ubicacion_id',
            'nombre',
            'Activo',
            'descripcion',
            // 'numero_control',
            // 'marca',
            // 'numero_serie',
            // 'modelo',
            // 'cantidad_inventario',
            // 'costo',
            // 'digito',
            // 'fecha_adquisicion',
            // 'fotografia_uno',
            // 'fotografia_dos',
            // 'fotografia_detalle',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
