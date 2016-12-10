<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PersonalesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Personales');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personales-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Personales'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'personal_id',
            'nombre',
            'referencia_resguardo',
            'grado',
            'telefono',
            // 'email:email',
            // 'direccion',
            // 'Activo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
