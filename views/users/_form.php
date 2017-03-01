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

    <?= $form->field($model, 'username')->textInput() ?>

    <?= $form->field($model, 'pass')->textInput() ?>
    <?= $form->field($model, 'id_role')->dropDownList([
        '1' => 'User',
        '2'=>'Admin'
    ])?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?php
    echo $form->field($model, 'ban_date')->widget(DatePicker::className(), [
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

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
