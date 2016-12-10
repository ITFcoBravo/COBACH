<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Personales;
use backend\models\Inmuebles;
/* @var $this yii\web\View */
/* @var $model backend\models\Reportes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reportes-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?php 
    $personales = ArrayHelper::map(Personales::find()->where(['Activo' =>1])->orderBy('nombre')->all(),'personal_id','nombre');
    ?>

    <?= $form->field($model, 'personal_id')->dropDownList($personales) ?>
    
    <?php 
    $inmuebles = ArrayHelper::map(Inmuebles::find()->where(['Activo' =>1])->orderBy('nombre')->all(),'inmueble_id','nombre');
    ?>
    
    <?= $form->field($model, 'inmueble_id')->dropDownList($inmuebles) ?>

    <?= $form->field($model, 'nombre_reporte')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>
    
    <?php 
        if(!$model->isNewRecord)
            echo  $form->field($model, 'Activo')->checkbox();
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
