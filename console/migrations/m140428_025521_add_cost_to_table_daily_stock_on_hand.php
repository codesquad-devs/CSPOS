<?php

use yii\db\Schema;

class m140428_025521_add_cost_to_table_daily_stock_on_hand extends \yii\db\Migration
{
    public function up()
    {
        $this->addColumn("daily_stock_on_hand","Cost","float");
    }

    public function down()
    {
        $this->dropColumn("daily_stock_on_hand","Cost");

        return false;
    }
}
