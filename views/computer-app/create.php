<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ComputerApp */

$this->title = 'Create Computer App';
$this->params['breadcrumbs'][] = ['label' => 'Computer Apps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computer-app-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
