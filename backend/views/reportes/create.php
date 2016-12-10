<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Reportes */

$this->title = Yii::t('app', 'Create Reportes');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reportes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reportes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
