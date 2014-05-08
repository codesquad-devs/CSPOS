<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Employee;

/**
 * EmployeeSearch represents the model behind the search form about `common\models\Employee`.
 */
class EmployeeSearch extends Employee
{
    public function rules()
    {
        return [
            [['EmployeeID', 'EmployeeName', 'Address1', 'Address2', 'Address3', 'Telephone1', 'Telephone2', 'Fax1', 'Email1', 'Sex', 'Race', 'Birth', 'Income_tax', 'EPF', 'SOSCO', 'NRIC', 'Married', 'Spouse', 'SpouseWork', 'Position', 'Department', 'Job_Start', 'Job_end', 'BankID', 'BankAcct', 'Remark', 'Password', 'Outlet', 'Previoussheetno', 'Npass', 'auth_key'], 'safe'],
            [['Childs', 'Level', 'Rec_no'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Employee::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Birth' => $this->Birth,
            'Childs' => $this->Childs,
            'Level' => $this->Level,
            'Job_Start' => $this->Job_Start,
            'Job_end' => $this->Job_end,
            'Rec_no' => $this->Rec_no,
        ]);

        $query->andFilterWhere(['like', 'EmployeeID', $this->EmployeeID])
            ->andFilterWhere(['like', 'EmployeeName', $this->EmployeeName])
            ->andFilterWhere(['like', 'Address1', $this->Address1])
            ->andFilterWhere(['like', 'Address2', $this->Address2])
            ->andFilterWhere(['like', 'Address3', $this->Address3])
            ->andFilterWhere(['like', 'Telephone1', $this->Telephone1])
            ->andFilterWhere(['like', 'Telephone2', $this->Telephone2])
            ->andFilterWhere(['like', 'Fax1', $this->Fax1])
            ->andFilterWhere(['like', 'Email1', $this->Email1])
            ->andFilterWhere(['like', 'Sex', $this->Sex])
            ->andFilterWhere(['like', 'Race', $this->Race])
            ->andFilterWhere(['like', 'Income_tax', $this->Income_tax])
            ->andFilterWhere(['like', 'EPF', $this->EPF])
            ->andFilterWhere(['like', 'SOSCO', $this->SOSCO])
            ->andFilterWhere(['like', 'NRIC', $this->NRIC])
            ->andFilterWhere(['like', 'Married', $this->Married])
            ->andFilterWhere(['like', 'Spouse', $this->Spouse])
            ->andFilterWhere(['like', 'SpouseWork', $this->SpouseWork])
            ->andFilterWhere(['like', 'Position', $this->Position])
            ->andFilterWhere(['like', 'Department', $this->Department])
            ->andFilterWhere(['like', 'BankID', $this->BankID])
            ->andFilterWhere(['like', 'BankAcct', $this->BankAcct])
            ->andFilterWhere(['like', 'Remark', $this->Remark])
            ->andFilterWhere(['like', 'Password', $this->Password])
            ->andFilterWhere(['like', 'Outlet', $this->Outlet])
            ->andFilterWhere(['like', 'Previoussheetno', $this->Previoussheetno])
            ->andFilterWhere(['like', 'Npass', $this->Npass])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key]);

        return $dataProvider;
    }
}
