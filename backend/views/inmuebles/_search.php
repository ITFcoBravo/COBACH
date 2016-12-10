<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\InmueblesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inmuebles-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'inmueble_id') ?>

    <?= $form->field($model, 'ubicacion_id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'Activo') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?php // echo $form->field($model, 'numero_control') ?>

    <?php // echo $form->field($model, 'marca') ?>

    <?php // echo $form->field($model, 'numero_serie') ?>

    <?php // echo $form->field($model, 'modelo') ?>

    <?php // echo $form->field($model, 'cantidad_inventario') ?>

    <?php // echo $form->field($model, 'costo') ?>

    <?php // echo $form->field($model, 'digito') ?>

    <?php // echo $form->field($model, 'fecha_adquisicion') ?>

    <?php // echo $form->field($model, 'fotografia_uno') ?>

    <?php // echo $form->field($model, 'fotografia_dos') ?>

    <?php // echo $form->field($model, 'fotografia_detalle') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
