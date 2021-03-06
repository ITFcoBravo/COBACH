<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\UbicacionesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ubicaciones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ubicacion_id') ?>

    <?= $form->field($model, 'nombre_ubicacion') ?>

    <?= $form->field($model, 'plantel') ?>

    <?= $form->field($model, 'Activo') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
