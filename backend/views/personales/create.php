<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Personales */

$this->title = Yii::t('app', 'Create Personales');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Personales'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personales-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
