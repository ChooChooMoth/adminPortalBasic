<?php

use yii\helpers\Html;
use kartik\export\ExportMenu;
use app\models\User;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    if (User::isUserAdmin()) {
        echo Html::a('Create Users', ['create'], ['class' => 'btn btn-success']);
        $actionColumn = ['class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
            'buttons' => [
                'delete' => function($url, $model){
                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->id], [
                        'class' => '',
                        'data' => [
                            'confirm' => "Are you sure you want to delete $model->username from $this->title?",
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

        //'id',
        'username',
        //'password_hash',
        'id_role',
        //'comment:ntext',
         'created_at',
        // 'ban_date',
        // 'status',
        // 'auth_key:ntext',

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
