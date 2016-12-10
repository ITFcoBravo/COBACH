<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ReportesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Reportes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reportes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Reportes'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'reporte_id',
            'personal_id',
            'inmueble_id',
            'nombre_reporte',
            'descripcion',
            // 'fecha',
            // 'Activo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
