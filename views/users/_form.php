<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_role')->dropDownList([
        '1' => 'User',
        '2'=>'Admin'
    ])?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?php
    echo 'Ban Date';
    echo DatePicker::widget([
        'name' => 'dp_1',
        'type' => DatePicker::TYPE_INPUT,
        'value' => "$model->ban_date",
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]); ?>

    <?= $form->field($model, 'status')->dropDownList([
        '0' => 'Active',
        '10'=>'Banned'
    ])?>
    <?= $form->field($model, 'auth_key')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
