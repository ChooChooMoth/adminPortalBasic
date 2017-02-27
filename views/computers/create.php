<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Computers */

$this->title = 'Create Computers';
$this->params['breadcrumbs'][] = ['label' => 'Computers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
