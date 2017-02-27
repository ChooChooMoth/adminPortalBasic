<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Applications */

$this->title = 'Update Applications: ' . $model->app_name;
$this->params['breadcrumbs'][] = ['label' => 'Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->app_name, 'url' => ['view', 'id' => $model->app_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="applications-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
