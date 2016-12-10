<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\ReportesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reportes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'reporte_id') ?>

    <?= $form->field($model, 'personal_id') ?>

    <?= $form->field($model, 'inmueble_id') ?>

    <?= $form->field($model, 'nombre_reporte') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?php // echo $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'Activo') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
