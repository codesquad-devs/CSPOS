<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "employee".
 *
 * @property string $EmployeeID
 * @property string $EmployeeName
 * @property string $Address1
 * @property string $Address2
 * @property string $Address3
 * @property string $Telephone1
 * @property string $Telephone2
 * @property string $Fax1
 * @property string $Email1
 * @property string $Sex
 * @property string $Race
 * @property string $Birth
 * @property string $Income_tax
 * @property string $EPF
 * @property string $SOSCO
 * @property string $NRIC
 * @property string $Married
 * @property string $Spouse
 * @property string $SpouseWork
 * @property integer $Childs
 * @property string $Position
 * @property integer $Level
 * @property string $Department
 * @property string $Job_Start
 * @property string $Job_end
 * @property string $BankID
 * @property string $BankAcct
 * @property string $Remark
 * @property string $Password
 * @property string $Outlet
 * @property string $Rec_no
 * @property string $Previoussheetno
 * @property string $Npass
 */
class Employee extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EmployeeName'], 'required'],
            [['Birth', 'Job_Start', 'Job_end'], 'safe'],
            [['Childs', 'Level'], 'integer'],
            [['Remark'], 'string'],
            [['EmployeeID', 'Outlet'], 'string', 'max' => 10],
            [['EmployeeName', 'Address1', 'Address2', 'Address3', 'Spouse'], 'string', 'max' => 60],
            [['Telephone1', 'Telephone2', 'Fax1', 'Race', 'Department', 'BankAcct'], 'string', 'max' => 15],
            [['Email1'], 'string', 'max' => 50],
            [['Sex', 'Married', 'SpouseWork'], 'string', 'max' => 1],
            [['Income_tax', 'EPF', 'SOSCO', 'Previoussheetno'], 'string', 'max' => 25],
            [['NRIC', 'Position'], 'string', 'max' => 20],
            [['BankID'], 'string', 'max' => 4],
            [['Password', 'Npass'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'EmployeeID' => 'Employee ID',
            'EmployeeName' => 'Employee Name',
            'Address1' => 'Address1',
            'Address2' => 'Address2',
            'Address3' => 'Address3',
            'Telephone1' => 'Telephone1',
            'Telephone2' => 'Telephone2',
            'Fax1' => 'Fax1',
            'Email1' => 'Email1',
            'Sex' => 'Sex',
            'Race' => 'Race',
            'Birth' => 'Birth',
            'Income_tax' => 'Income Tax',
            'EPF' => 'Epf',
            'SOSCO' => 'Sosco',
            'NRIC' => 'Nric',
            'Married' => 'Married',
            'Spouse' => 'Spouse',
            'SpouseWork' => 'Spouse Work',
            'Childs' => 'Childs',
            'Position' => 'Position',
            'Level' => 'Level',
            'Department' => 'Department',
            'Job_Start' => 'Job  Start',
            'Job_end' => 'Job End',
            'BankID' => 'Bank ID',
            'BankAcct' => 'Bank Acct',
            'Remark' => 'Remark',
            'Password' => 'Password',
            'Outlet' => 'Outlet',
            'Rec_no' => 'Rec No',
            'Previoussheetno' => 'Previoussheetno',
            'Npass' => 'Npass',
        ];
    }

    public function getId()
    {
        return $this->EmployeeID;
    }

    public static function findByUsername($username)
    {
        return static::findOne(['EmployeeID' => $username]);
    }

    public function validatePassword($employeeID,$password)
    {
        return static::findBySql('select * from employee where `EmployeeID` = "'.$employeeID.'" AND `Password` = PASSWORD("'.$password.'")')->exists();

    }

    public static function findIdentity($id)
    {
        return static::findOne(['EmployeeID' => $id]);
    }

    public static function findIdentityByAccessToken($token)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public static function findByPasswordResetToken($token)
    {
        $expire = \Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        if ($timestamp + $expire < time()) {
            // token expired
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function generateAuthKey()
    {
        $this->auth_key = Security::generateRandomKey();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Security::generateRandomKey() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    public function beforeSave($insert){
        $this->Password = new Expression('PASSWORD("'.$this->Password.'")');
        return true;
    }
}
