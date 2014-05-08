<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\Employee $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EmployeeName')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'Birth')->textInput() ?>

    <?= $form->field($model, 'Job_Start')->textInput() ?>

    <?= $form->field($model, 'Job_end')->textInput() ?>

    <?= $form->field($model, 'Childs')->textInput() ?>

    <?= $form->field($model, 'Level')->textInput() ?>

    <?= $form->field($model, 'Remark')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'EmployeeID')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Outlet')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Address1')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'Address2')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'Address3')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'Spouse')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'Telephone1')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'Telephone2')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'Fax1')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'Race')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'Department')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'BankAcct')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'Email1')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'Sex')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'Married')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'SpouseWork')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'Income_tax')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'EPF')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'SOSCO')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'Previoussheetno')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'NRIC')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'Position')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'BankID')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'Password')->passwordInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'Npass')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
