<?php

use yii\helpers\Html;
use kartik\export\ExportMenu;
use app\models\User;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Computers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    if (User::isUserAdmin(Yii::$app->user->identity->username)) {
        echo Html::a('Create Computers', ['create'], ['class' => 'btn btn-success']);
        $actionColumn = ['class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
            'buttons' => [
                'delete' => function($url, $model){
                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->computer_id], [
                        'class' => '',
                        'data' => [
                            'confirm' => "Are you sure you want to delete $model->computer_name from $this->title?",
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
        'computer_name',
        'ip_adress',
        'login',
        'password',

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
