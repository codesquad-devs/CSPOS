<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "stock".
 *
 * @property string $Rec_no
 * @property string $ProductID
 * @property string $Outlet
 * @property string $LocationID
 * @property string $Batchno
 * @property string $Expirydate
 * @property double $Onhandbal
 * @property double $Cost
 * @property double $Oldqty
 * @property double $Oldcost
 * @property string $Datecreate
 * @property string $Timecreate
 * @property string $Usercreate
 * @property string $Datechange
 * @property string $Timechange
 * @property string $Userchange
 * @property string $Workstation
 * @property double $Lastbal
 * @property string $Closedate
 * @property string $Expirydatetext
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductID'], 'required'],
            [['Expirydate', 'Datecreate', 'Timecreate', 'Datechange', 'Timechange', 'Closedate'], 'safe'],
            [['Onhandbal', 'Cost', 'Oldqty', 'Oldcost', 'Lastbal'], 'number'],
            [['ProductID', 'Batchno'], 'string', 'max' => 25],
            [['Outlet', 'Usercreate', 'Userchange', 'Workstation', 'Expirydatetext'], 'string', 'max' => 10],
            [['LocationID'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Rec_no' => 'Rec No',
            'ProductID' => 'Product ID',
            'Outlet' => 'Outlet',
            'LocationID' => 'Location ID',
            'Batchno' => 'Batchno',
            'Expirydate' => 'Expirydate',
            'Onhandbal' => 'Onhandbal',
            'Cost' => 'Cost',
            'Oldqty' => 'Oldqty',
            'Oldcost' => 'Oldcost',
            'Datecreate' => 'Datecreate',
            'Timecreate' => 'Timecreate',
            'Usercreate' => 'Usercreate',
            'Datechange' => 'Datechange',
            'Timechange' => 'Timechange',
            'Userchange' => 'Userchange',
            'Workstation' => 'Workstation',
            'Lastbal' => 'Lastbal',
            'Closedate' => 'Closedate',
            'Expirydatetext' => 'Expirydatetext',
        ];
    }
}
