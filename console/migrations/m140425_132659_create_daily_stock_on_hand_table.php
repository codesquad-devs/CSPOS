<?php

use yii\db\Schema;

class m140425_132659_create_daily_stock_on_hand_table extends \yii\db\Migration
{
    public function up()
    {
        $this->createTable("daily_stock_on_hand",array(
            'id'=>'pk',
            'ProductID'=>'string',
            'Onhand'=>'double',
            'Date'=>'date',
        ));
    }

    public function down()
    {
        $this->dropTable("daily_stock_on_hand");

        return false;
    }
}
