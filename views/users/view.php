<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'username',
            //'password_hash',
            [
                'attribute' => 'id_role',
                'value' => function($model) {
                    if ($model->id_role == 1)
                        return 'User';
                    else
                        return 'Admin';
                }
            ],
            'comment:ntext',
            'created_at',
            [
                'attribute' => 'status',
                'value' => function($model) {
                    if ($model->status == 10)
                        return 'Active';
                    else
                        return 'Banned';
                }
            ],
            //'auth_key:ntext',
        ],
    ]) ?>

</div>
