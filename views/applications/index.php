<?php

use yii\helpers\Html;
use kartik\export\ExportMenu;
use app\models\User;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Applications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applications-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    if (User::isUserAdmin()) {

        echo Html::a('Create Applications', ['create'], ['class' => 'btn btn-success']);
        $actionColumn = ['class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
            'buttons' => [
                'delete' => function($url, $model){
                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->app_id], [
                        'class' => '',
                        'data' => [
                            'confirm' => "Are you sure you want to delete $model->app_name from $this->title?",
                            'method' => 'post',
                        ],
                    ]);
                }
            ]
        ];
    }
    else{
        $actionColumn =   ['class' => 'yii\grid\ActionColumn',
            'template' => '{view}',
        ];
    }
    $gridColumns = [

        'app_id',
        'app_name',
        'vendor_name',
        'licence_required',

        $actionColumn,
    ];
    // Renders a export dropdown menu
    echo ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns
    ]);
    // You can choose to render your own GridView separately
    echo \kartik\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns
    ]);
    ?>
</div>
