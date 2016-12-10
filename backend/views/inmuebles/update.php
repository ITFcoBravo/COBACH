<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Inmuebles */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Inmuebles',
]) . $model->inmueble_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Inmuebles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->inmueble_id, 'url' => ['view', 'id' => $model->inmueble_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="inmuebles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
