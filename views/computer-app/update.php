<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ComputerApp */

$this->title = 'Update Computer App: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Computer Apps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="computer-app-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
