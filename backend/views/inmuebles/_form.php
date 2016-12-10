<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Ubicaciones
/* @var $this yii\web\View */
/* @var $model backend\models\Inmuebles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inmuebles-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?php 
    $ubicaciones = ArrayHelper::map(Ubicaciones::find()->where(['Activo' =>1])->orderBy('nombre_ubicacion')->all(),'ubicacion_id','nombre_ubicacion');
    ?>
    
    <?= $form->field($model, 'ubicacion_id')->dropDownList($ubicaciones) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?php 
        if(!$model->isNewRecord)
            echo  $form->field($model, 'Activo')->checkbox();
    ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero_control')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero_serie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidad_inventario')->textInput() ?>

    <?= $form->field($model, 'costo')->textInput() ?>

    <?= $form->field($model, 'digito')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_adquisicion')->textInput() ?>

    <?= $form->field($model, 'fotografia_uno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fotografia_dos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fotografia_detalle')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
