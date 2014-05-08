<?php

use yii\db\Schema;

class m140430_093157_create_dbarchive_table_daily_stock_on_hand extends \yii\db\Migration
{
    public function up()
    {
        $this->createTable("daily_stock_on_hand",array(
            'id'=>'pk',
            'ProductID'=>'string',
            'OnHand'=>'double',
            'Date'=>'date',
        ));


    }

    public function down()
    {
        $this->dropTable("daily_stock_on_hand");

    }
}
