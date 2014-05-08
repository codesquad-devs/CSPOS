<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\search\EmployeeSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="employee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'EmployeeID') ?>

    <?= $form->field($model, 'EmployeeName') ?>

    <?= $form->field($model, 'Address1') ?>

    <?= $form->field($model, 'Address2') ?>

    <?= $form->field($model, 'Address3') ?>

    <?php // echo $form->field($model, 'Telephone1') ?>

    <?php // echo $form->field($model, 'Telephone2') ?>

    <?php // echo $form->field($model, 'Fax1') ?>

    <?php // echo $form->field($model, 'Email1') ?>

    <?php // echo $form->field($model, 'Sex') ?>

    <?php // echo $form->field($model, 'Race') ?>

    <?php // echo $form->field($model, 'Birth') ?>

    <?php // echo $form->field($model, 'Income_tax') ?>

    <?php // echo $form->field($model, 'EPF') ?>

    <?php // echo $form->field($model, 'SOSCO') ?>

    <?php // echo $form->field($model, 'NRIC') ?>

    <?php // echo $form->field($model, 'Married') ?>

    <?php // echo $form->field($model, 'Spouse') ?>

    <?php // echo $form->field($model, 'SpouseWork') ?>

    <?php // echo $form->field($model, 'Childs') ?>

    <?php // echo $form->field($model, 'Position') ?>

    <?php // echo $form->field($model, 'Level') ?>

    <?php // echo $form->field($model, 'Department') ?>

    <?php // echo $form->field($model, 'Job_Start') ?>

    <?php // echo $form->field($model, 'Job_end') ?>

    <?php // echo $form->field($model, 'BankID') ?>

    <?php // echo $form->field($model, 'BankAcct') ?>

    <?php // echo $form->field($model, 'Remark') ?>

    <?php // echo $form->field($model, 'Password') ?>

    <?php // echo $form->field($model, 'Outlet') ?>

    <?php // echo $form->field($model, 'Rec_no') ?>

    <?php // echo $form->field($model, 'Previoussheetno') ?>

    <?php // echo $form->field($model, 'Npass') ?>

    <?php // echo $form->field($model, 'auth_key') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
