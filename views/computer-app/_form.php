<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\ComputerApp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="computer-app-form">

    <?php $form = ActiveForm::begin();

    $computers = \app\models\Computers::find()->all();
    $applications = \app\models\Applications::find()->all();
    $itemsComp = ArrayHelper::map($computers,'computer_id','computer_name');
    $itemsApp = ArrayHelper::map($applications,'app_id','app_name');
    echo $form->field($model, 'computer_id')->dropDownList($itemsComp);
    echo $form->field($model, 'app_id')->dropDownList($itemsApp);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
