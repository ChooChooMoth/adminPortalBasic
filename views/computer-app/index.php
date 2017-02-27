<?php

use yii\helpers\Html;
use kartik\export\ExportMenu;
use app\models\User;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Computer Apps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    if (User::isUserAdmin(Yii::$app->user->identity->username)) {
        echo Html::a('Create Computer App', ['create'], ['class' => 'btn btn-success']);
        $actionColumn = ['class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
            'buttons' => [
                'delete' => function($url, $model){
                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->id], [
                        'class' => '',
                        'data' => [
                            'confirm' => "Are you sure you want to delete app with id=$model->app_id from computer with id=$model->computer_id?",
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

        'computer_id',
        'app_id',
        //'id',

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
    ]);?>
</div>