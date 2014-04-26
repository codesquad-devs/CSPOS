<?php

use yii\db\Schema;

class m140426_030203_create_index_for_daily_stock_on_hand extends \yii\db\Migration
{
    public function up()
    {
        $this->createIndex("unique key","daily_stock_on_hand","ProductID,Date",true);
    }

    public function down()
    {
        $this->dropIndex("unique key","daily_stock_on_hand");

        return false;
    }
}
