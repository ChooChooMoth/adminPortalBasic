<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ComputerApp */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Computer Apps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computer-app-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'computer_id',
            //'app_id',
            //'id',
            [
                'attribute' => 'computer_id',
                'value' => function($model) {
                    $comps = \app\models\Computers::findOne($model->computer_id);
                    return $items = $comps->computer_name;
                }
            ],
            [
                'attribute' => 'app_id',
                'value' => function($model) {
                    $apps = \app\models\Applications::findOne($model->app_id);
                    return $items = $apps->app_name;
                }
            ],
        ],
    ]) ?>

</div>
