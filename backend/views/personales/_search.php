<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\PersonalesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personales-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'personal_id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'referencia_resguardo') ?>

    <?= $form->field($model, 'grado') ?>

    <?= $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'Activo') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
