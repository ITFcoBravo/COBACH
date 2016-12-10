<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Ubicaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ubicaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_ubicacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plantel')->textInput(['maxlength' => true]) ?>

    <?php 
        if(!$model->isNewRecord)
            echo  $form->field($model, 'Activo')->checkbox();
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
