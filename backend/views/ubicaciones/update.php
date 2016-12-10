<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ubicaciones */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Ubicaciones',
]) . $model->ubicacion_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ubicaciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ubicacion_id, 'url' => ['view', 'id' => $model->ubicacion_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ubicaciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
