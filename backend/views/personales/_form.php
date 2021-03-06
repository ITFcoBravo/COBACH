<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Personales */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personales-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referencia_resguardo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grado')->dropDownList([ 'Licenciado' => 'Licenciado', 'Ingeniero' => 'Ingeniero', 'Docente' => 'Docente', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?php 
        if(!$model->isNewRecord)
            echo  $form->field($model, 'Activo')->checkbox();
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
