<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Personales */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Personales',
]) . $model->personal_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Personales'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->personal_id, 'url' => ['view', 'id' => $model->personal_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="personales-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
