<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Computers */

$this->title = 'Update Computers: ' . $model->computer_name;
$this->params['breadcrumbs'][] = ['label' => 'Computers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->computer_name, 'url' => ['view', 'id' => $model->computer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="computers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
