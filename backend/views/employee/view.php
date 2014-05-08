<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var common\models\Employee $model
 */

$this->title = $model->Rec_no;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Rec_no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Rec_no], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'EmployeeID',
            'EmployeeName',
            'Address1',
            'Address2',
            'Address3',
            'Telephone1',
            'Telephone2',
            'Fax1',
            'Email1:email',
            'Sex',
            'Race',
            'Birth',
            'Income_tax',
            'EPF',
            'SOSCO',
            'NRIC',
            'Married',
            'Spouse',
            'SpouseWork',
            'Childs',
            'Position',
            'Level',
            'Department',
            'Job_Start',
            'Job_end',
            'BankID',
            'BankAcct',
            'Remark:ntext',
            'Password',
            'Outlet',
            'Rec_no',
            'Previoussheetno',
            'Npass',
            'auth_key',
        ],
    ]) ?>

</div>
