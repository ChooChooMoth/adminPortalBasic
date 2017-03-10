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

    <?= $form->field($model, 'pass')->passwordInput() ?>
    <?= $form->field($model, 'id_role')->dropDownList([
        '1' => 'User',
        '2' => 'Admin'
    ])?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?php
    echo $form->field($model, 'created_at')->widget(DatePicker::className(), [
        'value' => "$model->created_at",
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]); ?>

    <?= $form->field($model, 'status')->dropDownList([
        '10' => 'Active',
        '0' => 'Banned'
    ])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
