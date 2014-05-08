<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\search\EmployeeSearch $searchModel
 */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'EmployeeID',
            'EmployeeName',
            //'Address1',
            //'Address2',
            //'Address3',
            // 'Telephone1',
            // 'Telephone2',
            // 'Fax1',
            // 'Email1:email',
            // 'Sex',
            // 'Race',
            // 'Birth',
            // 'Income_tax',
            // 'EPF',
            // 'SOSCO',
            // 'NRIC',
            // 'Married',
            // 'Spouse',
            // 'SpouseWork',
            // 'Childs',
            // 'Position',
             'Level',
            // 'Department',
            // 'Job_Start',
            // 'Job_end',
            // 'BankID',
            // 'BankAcct',
            // 'Remark:ntext',
            // 'Password',
            // 'Outlet',
            // 'Rec_no',
            // 'Previoussheetno',
            // 'Npass',
            // 'auth_key',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
