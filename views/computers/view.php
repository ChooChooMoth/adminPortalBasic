<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Computers */

$this->title = "Applications installed on $model->computer_name:";
$this->params['breadcrumbs'][] = ['label' => 'Computers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    $computer = \app\models\Computers::findOne($model->computer_id);
    $applications = $computer->applications;

    foreach ($applications as $item) {
        echo DetailView::widget([
            'model' => $item,
            'attributes' => [
                'app_id',
                'app_name',
                'vendor_name',
                'licence_required',
                //'computer_id',
                //'computer_name',
                //'ip_adress',
                //'login',
                //'password',
            ],
        ]);
    }
    ?>
</div>
