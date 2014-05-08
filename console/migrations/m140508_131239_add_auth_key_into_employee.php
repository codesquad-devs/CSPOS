<?php

use yii\db\Schema;

class m140508_131239_add_auth_key_into_employee extends \yii\db\Migration
{
    public function up()
    {
        $this->addColumn("employee","auth_key","varchar(32)");
    }

    public function down()
    {
        $this->dropColumn("employee","auth_key");

        return false;
    }
}
