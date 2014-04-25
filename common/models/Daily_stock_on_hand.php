<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "daily_stock_on_hand".
 *
 * @property integer $id
 * @property string $ProductID
 * @property double $OnHand
 * @property string $Date
 */
class Daily_stock_on_hand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daily_stock_on_hand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OnHand'], 'number'],
            [['Date'], 'safe'],
            [['ProductID'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ProductID' => 'Product ID',
            'OnHand' => 'On Hand',
            'Date' => 'Date',
        ];
    }
}
